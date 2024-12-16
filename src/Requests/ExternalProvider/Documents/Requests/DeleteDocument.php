<?php

namespace Sindhani\Requests\ExternalProvider\Documents\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Sindhani\Utils;

class DeleteDocument extends Request
{
    protected Method $method = Method::DELETE;

    public function __construct(private int $id) {}

    public function resolveEndpoint(): string
    {
        return Utils::DOCUMENTS.'/'.$this->id;
    }
}
