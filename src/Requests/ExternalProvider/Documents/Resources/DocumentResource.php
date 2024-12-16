<?php

namespace Sindhani\Requests\ExternalProvider\Documents\Resources;

use Saloon\Exceptions\Request\FatalRequestException;
use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\BaseResource;
use Saloon\Http\Response;
use Sindhani\Requests\ExternalProvider\Documents\Requests\DeleteDocument;
use Sindhani\Requests\ExternalProvider\Documents\Requests\StoreDocument;
use Sindhani\Requests\ExternalProvider\Documents\Requests\UpdateDocument;

class DocumentResource extends BaseResource
{
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
