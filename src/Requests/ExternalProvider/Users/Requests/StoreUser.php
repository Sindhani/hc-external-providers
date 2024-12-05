<?php

namespace Sindhani\Requests\ExternalProvider\Users\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;

class StoreUser extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private array $data) {}

    public function resolveEndpoint(): string
    {
        return '/users/';
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
