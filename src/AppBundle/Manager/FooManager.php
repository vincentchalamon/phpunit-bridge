<?php

namespace AppBundle\Manager;

use Doctrine\Bundle\DoctrineBundle\Registry;

class FooManager
{
    public function __construct(Registry $doctrine)
    {
        $doctrine->getEntityManager();
    }
}
