<?php

namespace Sindhani\Patients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeletePatient extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private int $id) {}

    public function resolveEndpoint(): string
    {
        return '/patients/'.$this->id;
    }
}
