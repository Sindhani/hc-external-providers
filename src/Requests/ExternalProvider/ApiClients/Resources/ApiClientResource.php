<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Resources;

use Illuminate\Http\Request;
use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\DeleteApiClient;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\GetActiveApiClients;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\GetAllApiClients;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\GetSingleApiClient;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\StoreApiClient;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\UpdateApiClient;

class ApiClientResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(Request $request): Response
    {
        return $this->connector->send(new GetAllApiClients(
            archived: $request->get('archived'),
            page: $request->get('page'),
            search: $request->get('search'),
            sortBy: $request->get('sortBy'),
            descending: $request->get('descending')
        ));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function getActiveProviders(): Response
    {
        return $this->connector->send(new GetActiveApiClients);
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function store(array $data): Response
    {
        return $this->connector->send(new StoreApiClient($data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function show(int $providerId): Response
    {
        return $this->connector->send(new GetSingleApiClient($providerId));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $id, array $data): Response
    {
        return $this->connector->send(new UpdateApiClient($id, $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeleteApiClient($id));
    }
}
