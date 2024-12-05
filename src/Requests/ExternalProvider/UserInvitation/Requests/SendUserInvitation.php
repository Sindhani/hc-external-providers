<?php

namespace Sindhani\Requests\ExternalProvider\UserInvitation\Requests;

use Saloon\Contracts\Body\HasBody;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Traits\Body\HasJsonBody;
use Sindhani\Utils;

class SendUserInvitation extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(private array $data) {}

    public function resolveEndpoint(): string
    {
        return Utils::USER_INVITATIONS_PATH;
    }

    public function defaultBody(): array
    {
        return $this->data;
    }
}
