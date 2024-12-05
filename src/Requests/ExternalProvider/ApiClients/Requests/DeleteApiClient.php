<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Sindhani\Utils;

class DeleteApiClient extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private int $id) {}

    public function resolveEndpoint(): string
    {
        return Utils::API_CLIENT_PATH.'/'.$this->id;
    }
}
