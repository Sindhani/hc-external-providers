<?php

namespace Sindhani\Requests\ExternalProvider\Documents\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sindhani\Utils;

class UpdateDocument extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::PATCH;

    public function __construct(private int $id, private array $data) {}

    public function resolveEndpoint(): string
    {
        return Utils::DOCUMENTS.'/'.$this->id;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
