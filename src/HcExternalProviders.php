<?php

namespace Sindhani;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Sindhani\Exceptions\NoTokenFoundException;
use Sindhani\Users\Resources\UserResource;
use Symfony\Component\HttpFoundation\Response;

class HcExternalProviders extends Connector
{
    public function __construct(private ?string $token = null)
    {
        $this->token = $this->token ?? config('hc-external-providers.api_token', null);

        if (! $this->token) {
            throw new NoTokenFoundException(
                message: 'No API token found. Please provide a token directly or configure it in the environment file.',
                code: Response::HTTP_BAD_REQUEST
            );
        }
    }

    public function users(): UserResource
    {
        return new UserResource($this);
    }

    public function resolveBaseUrl(): string
    {
        return config('hc-external-providers.base_url');
    }

    protected function defaultHeaders(): array
    {
        return [
            'Accept' => 'application/json',
            'Content-Type' => 'application/json',
        ];
    }

    protected function defaultAuth(): TokenAuthenticator
    {

        return new TokenAuthenticator($this->token);
    }
}
