<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sindhani\Utils;

class UpdateApiClient extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(private int $id, private array $data) {}

    public function resolveEndpoint(): string
    {
        return Utils::API_CLIENT_PATH.'/'.$this->id;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
