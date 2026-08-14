<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Generators;

use AirLST\SdkPhp\Paginator;
use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Exception;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;

use function in_array;
use function is_null;
use function sprintf;

class ConnectorGenerator extends AbstractGenerator
{
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        return $this->generateConnectorClass($specification) ?? [];
    }

    protected function generateConnectorClass(ApiSpecification $specification): ?PhpFile
    {
        $config = $this->config();
        $connectorName = $config->connectorName;

        if (is_null($connectorName)) {
            throw new Exception('Connector name is required in the configuration.');
        }

        $classType = new ClassType($connectorName);
        $classType->setExtends(Connector::class);
        $classType->setImplements([HasPagination::class]);

        if (! in_array($specification->name, [null, '', '0'], true)) {
            $classType->addComment($specification->name);
        }

        if (! in_array($specification->description, [null, '', '0'], true)) {
            $classType->addComment(in_array($specification->name, [null, '', '0'], true) ? $specification->description : "\n{$specification->description}");
        }

        $classFile = new PhpFile();

        $constructor = $classType->addMethod('__construct');
        $constructor->addPromotedParameter('apiKey')
            ->setType('string')
            ->setProtected()
            ->setReadOnly();

        if (is_null($specification->baseUrl)) {
            throw new Exception('Base URL is required in the API specification.');
        }

        $classType->addProperty('baseUrl')
            ->setType('string')
            ->setProtected()
            ->setValue($specification->baseUrl);

        $classType->addMethod('resolveBaseUrl')
            ->setReturnType('string')
            ->setBody('return $this->baseUrl;');

        $classType->addMethod('setBaseUrl')
            ->setReturnType('void')
            ->setBody('$this->baseUrl = $baseUrl;')
            ->addParameter('baseUrl')
            ->setType('string');

        $classType->addMethod('paginate')
            ->setPublic()
            ->setReturnType(Paginator::class)
            ->setBody('return new Paginator($this, $request);')
            ->addParameter('request')
            ->setType(Request::class);

        $classType->addMethod('defaultHeaders')
            ->setReturnType('array')
            ->setProtected()
            ->setBody('return [\'X-Api-Key\' => $this->apiKey];');

        $namespace = $classFile
            ->setStrictTypes()
            ->addNamespace("{$config->namespace}")
            ->addUse(Connector::class)
            ->addUse(Request::class)
            ->addUse(Paginator::class)
            ->addUse(HasPagination::class);

        $collections = collect($specification->endpoints)
            ->map(fn (Endpoint $endpoint): string => NameHelper::connectorClassName(in_array($endpoint->collection, [null, '', '0'], true) ? $config->fallbackResourceName : $endpoint->collection)) // @phpstan-ignore-line
            ->unique()
            ->sort()
            ->all();

        foreach ($collections as $collection) {
            $resourceClassName = NameHelper::connectorClassName($collection);
            $resourceFQN = "{$config->namespace}\\{$config->resourceNamespaceSuffix}\\{$resourceClassName}";

            $namespace->addUse($resourceFQN);

            // TODO: method names like "authenticate" will cause name collision with the Connector class methods,
            //  add a list of reserved method names and find a way to rename the method to something else, or add a pre/suffix

            $classType
                ->addMethod(NameHelper::safeVariableName($collection))
                ->setReturnType($resourceFQN)
                ->setBody(sprintf('return new %s($this);', $resourceClassName));
        }

        $namespace->add($classType);

        return $classFile;
    }
}
