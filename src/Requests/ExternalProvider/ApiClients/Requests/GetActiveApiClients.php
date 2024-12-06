<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Sindhani\Utils;

class GetActiveApiClients extends Request
{
    protected Method $method = Method::GET;

    public function resolveEndpoint(): string
    {
        return Utils::ACTIVE_API_CLIENT_PATH;
    }
}
