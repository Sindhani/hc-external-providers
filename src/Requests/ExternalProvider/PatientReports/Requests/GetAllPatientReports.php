<?php

namespace Sindhani\Requests\ExternalProvider\PatientReports\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllPatientReports extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/patients';
    }
}
