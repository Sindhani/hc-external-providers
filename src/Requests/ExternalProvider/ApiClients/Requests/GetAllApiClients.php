<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Sindhani\Utils;

class GetAllApiClients extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return Utils::API_CLIENT_PATH;
    }
}
