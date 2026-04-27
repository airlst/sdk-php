<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Generators;

use Crescat\SaloonSdkGenerator\Data\Generator\Config;
use Crescat\SaloonSdkGenerator\Generator;
use LogicException;

abstract class AbstractGenerator extends Generator
{
    protected function config(): Config
    {
        if ($this->config === null) {
            throw new LogicException(static::class . ' requires a Config instance.');
        }

        return $this->config;
    }
}
