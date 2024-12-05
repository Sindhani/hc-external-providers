<?php

namespace Sindhani;

use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Sindhani\Exceptions\BaseUrlMissingException;
use Sindhani\Exceptions\NoTokenFoundException;
use Sindhani\Requests\ExternalProvider\PatientReports\Resources\PatientReportResource;
use Sindhani\Requests\ExternalProvider\Patients\Resources\PatientResource;
use Symfony\Component\HttpFoundation\Response;

class AgencyConnector extends Connector
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

    public function patients(): PatientResource
    {
        return new PatientResource($this);
    }

    public function patientReports(): PatientReportResource
    {
        return new PatientReportResource($this);
    }

    /**
     * @throws BaseUrlMissingException
     */
    public function resolveBaseUrl(): string
    {
        if (! config('hc-external-providers.base_url')) {
            throw new BaseUrlMissingException(
                message: 'No base URL configured. Please set the `base_url` in your configuration or environment file.',
                code: Response::HTTP_BAD_REQUEST
            );
        }

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
