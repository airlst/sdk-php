<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Commands;

use AirLST\SdkPhp\Builder\Generators\BaseResourceGenerator;
use AirLST\SdkPhp\Builder\Generators\ConnectorGenerator;
use AirLST\SdkPhp\Builder\Generators\PaginatorGenerator;
use AirLST\SdkPhp\Builder\Generators\RequestGenerator;
use AirLST\SdkPhp\Builder\Generators\ResourceGenerator;
use AirLST\SdkPhp\Builder\Parsers\OpenApiParser;
use Crescat\SaloonSdkGenerator\CodeGenerator;
use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Data\Generator\GeneratedCode;
use Crescat\SaloonSdkGenerator\Factory;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Nette\PhpGenerator\PhpFile;

use function base_path;
use function dirname;
use function file_exists;
use function file_get_contents;
use function file_put_contents;
use function is_null;
use function mkdir;
use function sprintf;
use function storage_path;
use function str_replace;

class BuildCommand extends Command
{
    protected const string NAMESPACE = 'AirLST\SdkPhp';
    protected const string TYPE = 'openapi';
    protected $signature = 'airlst-sdk-php:build {spec-url=https://airlst.app/openapi.yml} {--no-download}';
    protected $description = 'BuildCommand SDK';

    public function handle(): void
    {
        $specFile = storage_path('openapi.yml');

        if ($this->option('no-download') === false) {
            if (filter_var($this->argument('spec-url'), FILTER_VALIDATE_URL) === false) {
                $this->error('Invalid specification URL provided.');

                return;
            }

            $spec = file_get_contents($this->argument('spec-url')); // @phpstan-ignore-line

            if ($spec === false) {
                $this->error('Failed to read the specification file.');

                return;
            }

            file_put_contents($specFile, $spec);
        }

        if (! file_exists($specFile)) {
            $this->error('Specification file does not exist');

            return;
        }

        $config = new Config(
            'CoreApi',
            self::NAMESPACE,
            resourceNamespaceSuffix: 'Resources',
        );

        $paginatorGenerator = new PaginatorGenerator();
        $this->dumpToFile($paginatorGenerator->generate());

        $generator = new CodeGenerator(
            $config,
            requestGenerator: new RequestGenerator($config),
            resourceGenerator: new ResourceGenerator($config),
            connectorGenerator: new ConnectorGenerator($config),
            baseResourceGenerator: new BaseResourceGenerator($config),
        );

        Factory::registerParser(self::TYPE, OpenApiParser::class);

        $this->dumpGeneratedFiles(
            $generator->run(Factory::parse(self::TYPE, $specFile))
        );
    }

    protected function dumpGeneratedFiles(GeneratedCode $result): void
    {
        $this->info('Generated Files');

        $this->info("\nConnector:");
        if (! is_null($result->connectorClass)) {
            $this->dumpToFile($result->connectorClass);
        }

        $this->info("\nBase Resource:");
        if ($result->resourceBaseClass instanceof PhpFile) {
            $this->dumpToFile($result->resourceBaseClass);
        }

        $this->info("\nResources:");
        foreach ($result->resourceClasses as $resourceClass) {
            $this->dumpToFile($resourceClass);
        }

        $this->info("\nRequests:");
        foreach ($result->requestClasses as $requestClass) {
            $this->dumpToFile($requestClass);
        }
    }

    protected function dumpToFile(PhpFile $file): void
    {
        $wip = sprintf(
            '%s/%s/%s.php',
            base_path('build'),
            str_replace(self::NAMESPACE, '', Arr::first($file->getNamespaces())->getName()), // @phpstan-ignore-line
            Arr::first($file->getClasses())->getName(), // @phpstan-ignore-line
        );

        $filePath = Str::of($wip)->replace('\\', '/')->replace('//', '/')->toString();

        if (! file_exists(dirname($filePath))) {
            mkdir(dirname($filePath), recursive: true);
        }

        $ok = file_put_contents($filePath, (string) $file);

        if ($ok === false) {
            $this->error("- Failed to write: {$filePath}");
        } else {
            $this->line("- Created: {$filePath}");
        }
    }
}
