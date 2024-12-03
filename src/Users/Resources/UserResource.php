<?php

namespace Sindhani\Users\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Users\Requests\DeleteUser;
use Sindhani\Users\Requests\GetAllUsers;
use Sindhani\Users\Requests\GetSingleUser;
use Sindhani\Users\Requests\StoreUser;
use Sindhani\Users\Requests\UpdateUser;

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
        return $this->connector->send(new StoreUser($data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function update(int $id, array $data): Response
    {
        return $this->connector->send(new UpdateUser($id, $data));
    }

    /**
     * @throws FatalRequestException
     * @throws RequestException
     */
    public function delete(int $id): Response
    {
        return $this->connector->send(new DeleteUser($id));
    }
}
