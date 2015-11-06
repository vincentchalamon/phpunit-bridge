<?php

namespace AppBundle\Tests\Manager;

use AppBundle\Manager\FooManager;
use Doctrine\Bundle\DoctrineBundle\Registry;
use Doctrine\Common\Persistence\ObjectManager;

class FooManagerTest extends \PHPUnit_Framework_TestCase
{
    public function testDeprecated()
    {
        /** @var ObjectManager|Registry $doctrineMock */
        $doctrineMock = $this->prophesize('Doctrine\Bundle\DoctrineBundle\Registry');
        $doctrineMock->getEntityManager()->shouldBeCalled();

        new FooManager($doctrineMock->reveal());
    }
}
