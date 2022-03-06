<?php

namespace UpgradePHP\ApiBasicSlim;

use Psr\Http\Message\ResponseInterface;

trait JsonResponse
{

    protected function toJson(
        ResponseInterface $response,
        array $data = [],
        int $statusCode = 200,
        string $message = "ok"
    ): ResponseInterface {
        $response->getBody()->write(json_encode(array(
            'success' => true,
            'data' => $data,
            'message' => $message
        )));

        return $response
            ->withHeader('Content-Type', 'application/json')
            ->withStatus($statusCode);
    }
}
