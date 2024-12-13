<?php

namespace Sindhani\Requests\ExternalProvider\UserInvitation\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\UserInvitation\Requests\SendUserInvitation;

class UserInvitationResource extends BaseResource
{

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */

    public function sendInvitation(array $data): Response
    {
        return $this->connector->send(new SendUserInvitation($data));
    }
}
