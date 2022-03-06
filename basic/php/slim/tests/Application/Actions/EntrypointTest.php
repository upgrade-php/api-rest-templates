<?php

namespace Teste\ApiBasicSlim\Application\Actions;

use Teste\ApiBasicSlim\TestCase;

class EntrypointTest extends TestCase
{

    public function testAction()
    {
        $app = $this->getAppInstance();
        $request = $this->createRequest('GET', '/');
        $response = $app->handle($request);
        $this->assertSame(200, $response->getStatusCode());
        $result = json_decode($response->getBody(), true);
        $this->assertSame(true, $result['success']);

    }
}
