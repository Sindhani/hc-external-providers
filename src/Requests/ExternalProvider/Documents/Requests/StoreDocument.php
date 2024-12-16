<?php

namespace Sindhani\Requests\ExternalProvider\Documents\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sindhani\Utils;

class StoreDocument extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private array $data) {}

    public function resolveEndpoint(): string
    {
        return Utils::DOCUMENTS;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
