<?php

namespace App\DataFixtures;

use App\Entity\Customer;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CustomerFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $customer0 = new Customer();
        $customer0->setFirstName("John");
        $customer0->setLastName("Dow");

        $customer1 = new Customer();
        $customer1->setFirstName("Walter");
        $customer1->setLastName("White");

        $customer2 = new Customer();
        $customer2->setFirstName("John");
        $customer2->setLastName("Snow");

        $customers = [$customer0, $customer1, $customer2];

        foreach ($customers as $key => $value) {
            $this->setReference("customer_$key", $value);
            $manager->persist($value);
        }

        $manager->flush();
    }
}
