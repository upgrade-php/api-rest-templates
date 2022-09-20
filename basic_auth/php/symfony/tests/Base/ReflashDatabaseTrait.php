<?php

namespace App\Tests\Base;

use Doctrine\ORM\Tools\SchemaTool;

trait ReflashDatabaseTrait
{
    function reflash($kernel)
    {   
        $entityManager = $kernel->getContainer()->get('doctrine.orm.entity_manager');

        $metadatas = $entityManager->getMetadataFactory()->getAllMetadata();
        $schemaTool = new SchemaTool($entityManager);
        $schemaTool->updateSchema($metadatas);

    }
}