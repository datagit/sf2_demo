<?php

/**
 * Created by PhpStorm.
 * User: root
 * Date: 9/24/15
 * Time: 6:15 PM
 */
// src/Acme/HelloBundle/DataFixtures/ORM/LoadUserData.php

namespace Local\Bundle\MyCoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Local\Bundle\MyCoreBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setEmail('admin@gmail.com');
        $userAdmin->setPassword('admin');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}