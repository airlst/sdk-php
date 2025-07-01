<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Builder;

use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;

class Paginator extends PagedPaginator
{
    protected function isLastPage(Response $response): bool
    {
        $paginationMeta = $response->json('meta.pagination');

        return $paginationMeta['current_page'] >= $paginationMeta['total_pages'];
    }

    protected function getPageItems(Response $response, Request $request): array
    {
        return $response->json('data');
    }
}
