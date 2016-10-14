<?php 

namespace module\ClientWebsitePortalBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use module\ClientWebsitePortalBundle\Entity\User;

class LoadUserData implements FixtureInterface {
    public function load(ObjectManager $manager) {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPassword('test');
        $userAdmin->setEmail('admin@test.com');

        $manager->persist($userAdmin);
        $manager->flush();
    }
}
