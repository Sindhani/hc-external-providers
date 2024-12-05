<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\DeleteApiClient;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\GetAllApiClients;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\StoreApiClient;
use Sindhani\Requests\ExternalProvider\ApiClients\Requests\UpdateApiClient;
use Sindhani\Requests\ExternalProvider\Patients\Requests\DeletePatient;
use Sindhani\Requests\ExternalProvider\Patients\Requests\GetAllPatients;
use Sindhani\Requests\ExternalProvider\Patients\Requests\StorePatient;
use Sindhani\Requests\ExternalProvider\Patients\Requests\UpdatePatient;

class ApiClientResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAllApiClients($page));
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
