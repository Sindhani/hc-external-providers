<?php

namespace Sindhani\Requests\ExternalProvider\Users\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;

class DeleteUser extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private int $id) {}

    public function resolveEndpoint(): string
    {
        return '/users/'.$this->id;
    }
}
