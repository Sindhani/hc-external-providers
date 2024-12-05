<?php

namespace Sindhani\Requests\ExternalProvider\PatientReports\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePatientReport extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private int $patientId, private int $reportId) {}

    public function resolveEndpoint(): string
    {
        return '/patients/'.$this->patientId.'/reports/'.$this->reportId;
    }
}
