<?php

namespace Sindhani\Requests\ExternalProvider\Patients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetSingleUser extends Request
{
    protected Method $method = Method::GET;

    public function __construct(private int $id) {}

    public function resolveEndpoint(): string
    {
        return '/users/'.$this->id;
    }
}
