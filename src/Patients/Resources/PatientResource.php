<?php

namespace Sindhani\Patients\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Patients\Requests\DeletePatientReport;
use Sindhani\Patients\Requests\GetAllPatientReports;
use Sindhani\Patients\Requests\GetSingleUser;
use Sindhani\Patients\Requests\StorePatientReport;
use Sindhani\Patients\Requests\UpdatePatientReport;

class PatientResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAllPatientReports($page));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function find(int $id): Response
    {
        return $this->connector->send(new GetSingleUser($id));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function store(array $data): Response
    {
        return $this->connector->send(new StorePatientReport($data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $id, array $data): Response
    {
        return $this->connector->send(new UpdatePatientReport($id, $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeletePatientReport($id));
    }
}
