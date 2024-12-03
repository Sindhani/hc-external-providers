<?php

namespace Sindhani\Patients\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class StorePatient extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private array $data) {}

    public function resolveEndpoint(): string
    {
        return '/patients/';
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
