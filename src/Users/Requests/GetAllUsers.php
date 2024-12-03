<?php

namespace Sindhani\Users\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class GetAllUsers extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return '/users';
    }
}
