<?php

namespace Sindhani\Requests\ExternalProvider\PatientReports\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdatePatientReport extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(private int $patientId, private int $reportId, private array $data) {}

    public function resolveEndpoint(): string
    {
        return '/patients/'.$this->patientId.'/reports/'.$this->reportId;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
