<?php

namespace Sindhani\Requests\ExternalProvider\Patients\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\Patients\Requests\DeletePatient;
use Sindhani\Requests\ExternalProvider\Patients\Requests\GetAllPatients;
use Sindhani\Requests\ExternalProvider\Patients\Requests\StorePatient;
use Sindhani\Requests\ExternalProvider\Patients\Requests\UpdatePatient;

class PatientResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAllPatients($page));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function store(array $data): Response
    {
        return $this->connector->send(new StorePatient($data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $id, array $data): Response
    {
        return $this->connector->send(new UpdatePatient($id, $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeletePatient($id));
    }
}
