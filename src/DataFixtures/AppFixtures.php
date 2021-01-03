<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        $manager->flush();
    }
    /**
     * @inheritDoc
     *
     */
    public function getDependencies()
    {
        return [
            UserFixtures::class,
            CustomerFixtures::class,
            ProductFixtures::class,
            OrderFixtures::class,
        ];
    }
}
