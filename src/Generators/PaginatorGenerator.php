<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder\Generators;

use Nette\PhpGenerator\ClassType;
use Nette\PhpGenerator\Parameter;
use Nette\PhpGenerator\PhpFile;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;

class PaginatorGenerator
{
    public function generate(): PhpFile
    {
        $classType = new ClassType('Paginator');
        $classType->setExtends(PagedPaginator::class);

        $classType->addComment('Paginator');

        $classFile = new PhpFile();

        $classType->addMethod('isLastPage')
            ->setProtected()
            ->setReturnType('bool')
            ->setBody('
                $paginationMeta = $response->json(\'meta.pagination\');

                return $paginationMeta[\'current_page\'] >= $paginationMeta[\'total_pages\'];
            ')
            ->addParameter('response')
            ->setType(Response::class);

        $classType->addMethod('getPageItems')
            ->setProtected()
            ->setReturnType('array')
            ->setBody('return $response->json(\'data\');')
            ->setParameters([
                new Parameter('response')->setType(Response::class),
                new Parameter('request')->setType(Request::class),
            ]);

        $namespace = $classFile
            ->setStrictTypes()
            ->addNamespace('AirLST\SdkPhp')
            ->addUse(PagedPaginator::class)
            ->addUse(Request::class)
            ->addUse(Response::class);

        $namespace->add($classType);

        return $classFile;
    }
}
