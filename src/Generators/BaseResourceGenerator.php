<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\ApiSpecification;
use Crescat\SaloonSdkGenerator\Generator;
use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\PhpFile;

class BaseResourceGenerator extends Generator
{
    public function generate(ApiSpecification $specification): PhpFile|array
    {
        $classType = new ClassType('Resource');
        $classType
            ->addMethod('__construct')
            ->addPromotedParameter('connector')
            ->setType(\AirLST\SdkPhp\CoreApi::class)
            ->setProtected();

        $classFile = new PhpFile();
        $classFile->addNamespace("{$this->config->namespace}")
            ->addUse(\AirLST\SdkPhp\CoreApi::class)
            ->add($classType);

        return $classFile;
    }
}
