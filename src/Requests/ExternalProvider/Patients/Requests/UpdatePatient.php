<?php

namespace Sindhani\Requests\ExternalProvider\Patients\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class UpdatePatient extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(private int $id, private array $data) {}

    public function resolveEndpoint(): string
    {
        return '/patients/'.$this->id;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
