<?php

namespace Sindhani\Patients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllPatients extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/patients';
    }
}
