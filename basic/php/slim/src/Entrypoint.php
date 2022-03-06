<?php

namespace UpgradePHP\ApiBasicSlim;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class Entrypoint extends HttpController
{

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response): ResponseInterface
    {
        return $this->toJson($response, [
            'data' => "Hello Word"
        ]);
    }
}
