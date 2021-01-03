<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder = $encoder;
    }
    public function load(ObjectManager $manager)
    {
        $user0 = new User();
        $user0->setUsername('admin');
        $user0->setPassword('S3cr3T+');
        $user0->setRoles(['ROLE_ADMIN']);
        $hashed = $this->encoder->encodePassword($user0, $user0->getPassword());
        $user0->setPassword($hashed);

        $manager->persist($user0);

        $manager->flush();
    }
}
