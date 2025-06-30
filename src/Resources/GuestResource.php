<?php

declare(strict_types=1);

namespace AirLST\SdkPhp\Resources;

use AirLST\SdkPhp\Client\CoreApi;
use AirLST\SdkPhp\Contracts\GuestResourceContract;
use AirLST\SdkPhp\Requests\Guest\CreateRequest;
use AirLST\SdkPhp\Requests\Guest\DeleteRequest;
use AirLST\SdkPhp\Requests\Guest\GetRequest;
use AirLST\SdkPhp\Requests\Guest\ListRequest;
use AirLST\SdkPhp\Requests\Guest\UpdateRequest;
use AirLST\SdkPhp\Requests\Guest\ValidateCodeRequest;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Saloon\PaginationPlugin\PagedPaginator;

/**
 * @property CoreApi $connector
 */
class GuestResource extends BaseResource implements GuestResourceContract
{
    public function validateCode(string $code): Response
    {
        return $this->connector->send(new ValidateCodeRequest($code));
    }

    public function list(array $query = []): Response
    {
        return $this->connector->send(new ListRequest($query));
    }

    /**
     * @param array<string, mixed> $query
     */
    public function listPaginated(array $query = []): PagedPaginator
    {
        return $this->connector->paginate(new ListRequest($query));
    }

    public function get(string $code): Response
    {
        return $this->connector->send(new GetRequest($code));
    }

    public function create(array $data): Response
    {
        return $this->connector->send(new CreateRequest($data));
    }

    public function update(string $code, array $data): Response
    {
        return $this->connector->send(new UpdateRequest($code, $data));
    }

    public function delete(string $code): Response
    {
        return $this->connector->send(new DeleteRequest($code));
    }
}
