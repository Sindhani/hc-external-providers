<?php

namespace Sindhani\Requests\ExternalProvider\PatientReports\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class StorePatientReport extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private int $patientId, private array $data) {}

    public function resolveEndpoint(): string
    {
        return '/patients/'.$this->patientId.'/reports';
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
