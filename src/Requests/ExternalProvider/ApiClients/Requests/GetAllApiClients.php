<?php

namespace Sindhani\Requests\ExternalProvider\ApiClients\Requests;

use Saloon\Enums\Method;
use Saloon\Http\Request;
use Sindhani\Utils;

class GetAllApiClients extends Request
{
    protected Method $method = Method::GET;
    public function __construct(
        private bool    $archived = false,
        private int    $page = 1,
        private ?string $search = null,
        private ?string $sortBy = null,
        private ?bool $descending = false,

    )
    {
    }

    protected function defaultQuery(): array
    {
        return [
            'archived' => $this->archived,
            'page' => $this->page,
            'search' => $this->search,
            'sortBy' => $this->sortBy,
            'descending' => $this->descending
        ];
    }

    public function resolveEndpoint(): string
    {
        return Utils::API_CLIENT_PATH;
    }
}
