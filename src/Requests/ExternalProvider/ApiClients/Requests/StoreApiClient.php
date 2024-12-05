<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sindhani\Utils;

class StoreApiClient extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private array $data) {}

    public function resolveEndpoint(): string
    {
        return Utils::API_CLIENT_PATH;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
