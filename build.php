<?php
require __DIR__ . '/vendor/autoload.php';

use AirLST\SdkPhp\Builder\Commands\BuildCommand;
use Illuminate\Foundation\Application; // Use the full Application
use Illuminate\Console\OutputStyle;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\ConsoleOutput;

$app = new Application(__DIR__);

$command = new BuildCommand();
$command->setLaravel($app);

$input = new ArrayInput([
    'spec-url' => 'https://airlst.app/openapi.yml',
    '--no-download' => false,
]);
$output = new OutputStyle($input, new ConsoleOutput());

$command->setOutput($output);
$command->run($input, $output);
