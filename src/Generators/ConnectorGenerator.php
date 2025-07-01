<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Data\Generator\Endpoint;
use Crescat\SaloonSdkGenerator\Generator;
use Crescat\SaloonSdkGenerator\Helpers\NameHelper;
use Exception;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Connector;
use Saloon\Http\Request;
use Saloon\PaginationPlugin\Contracts\HasPagination;
use Saloon\PaginationPlugin\PagedPaginator;

use function is_null;
use function sprintf;

class ConnectorGenerator extends Generator
{
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        return $this->generateConnectorClass($specification) ?? [];
    }

    protected function generateConnectorClass(ApiSpecification $specification): ?PhpFile
    {
        $classType = new ClassType($this->config->connectorName);
        $classType->setExtends(Connector::class);
        $classType->setImplements([HasPagination::class]);

        if ($specification->name !== null && $specification->name !== '' && $specification->name !== '0') {
            $classType->addComment($specification->name);
        }

        if ($specification->description !== null && $specification->description !== '' && $specification->description !== '0') {
            $classType->addComment($specification->name !== null && $specification->name !== '' && $specification->name !== '0' ? "\n{$specification->description}" : $specification->description);
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
            ->setReturnType(PagedPaginator::class)
            ->setBody('return new Paginator($this, $request);')
            ->addParameter('request')
            ->setType(Request::class);

        $classType->addMethod('defaultHeaders')
            ->setReturnType('array')
            ->setProtected()
            ->setBody('return [\'X-Api-Key\' => $this->apiKey];');

        $namespace = $classFile
            ->setStrictTypes()
            ->addNamespace("{$this->config->namespace}")
            ->addUse(Connector::class)
            ->addUse(Request::class)
            ->addUse(PagedPaginator::class)
            ->addUse(HasPagination::class);

        $collections = collect($specification->endpoints)
            ->map(fn (Endpoint $endpoint): string => NameHelper::connectorClassName($endpoint->collection !== null && $endpoint->collection !== '' && $endpoint->collection !== '0' ? $endpoint->collection : $this->config->fallbackResourceName)) // @phpstan-ignore-line
            ->unique()
            ->sort()
            ->all();

        foreach ($collections as $collection) {
            $resourceClassName = NameHelper::connectorClassName($collection);
            $resourceFQN = "{$this->config->namespace}\\{$this->config->resourceNamespaceSuffix}\\{$resourceClassName}";

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
