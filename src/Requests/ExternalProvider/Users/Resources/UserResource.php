<?php

namespace Sindhani\Requests\ExternalProvider\Users\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\Users\Requests\DeleteDocument;
use Sindhani\Requests\ExternalProvider\Users\Requests\GetAllUsers;
use Sindhani\Requests\ExternalProvider\Users\Requests\GetSingleUser;
use Sindhani\Requests\ExternalProvider\Users\Requests\StoreDocument;
use Sindhani\Requests\ExternalProvider\Users\Requests\UpdateDocument;

class UserResource extends BaseResource
{
    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function all(int $page = 1): Response
    {
        return $this->connector->send(new GetAllUsers($page));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function find(int $id): Response
    {
        return $this->connector->send(new GetSingleUser($id));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function store(array $data): Response
    {
        return $this->connector->send(new StoreDocument($data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $id, array $data): Response
    {
        return $this->connector->send(new UpdateDocument($id, $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeleteDocument($id));
    }
}
