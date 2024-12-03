<?php

namespace Sindhani\PatientReports\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\PatientReports\Requests\DeletePatientReport;
use Sindhani\PatientReports\Requests\GetAllPatientReports;
use Sindhani\PatientReports\Requests\StorePatientReport;
use Sindhani\PatientReports\Requests\UpdatePatientReport;
use Sindhani\Patients\Requests\GetSingleUser;

class PatientReportResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAllPatientReports);
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
    public function store(int $patientId, array $data): Response
    {
        return $this->connector->send(new StorePatientReport(patientId: $patientId, data: $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $patientId, int $reportId, array $data): Response
    {
        return $this->connector->send(new UpdatePatientReport(patientId: $patientId, reportId: $reportId, data: $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $patientId, int $reportId): Response
    {
        return $this->connector->send(new DeletePatientReport(patientId: $patientId, reportId: $reportId));
    }
}
