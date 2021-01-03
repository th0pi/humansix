<?php

namespace App\DataFixtures;

use App\Entity\Order;
use DateTime;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class OrderFixtures extends Fixture 
{
    public function load(ObjectManager $manager)
    {
        $order1 = new Order();
        $order1->setCustomer($this->getReference("customer_0"));
        $order1->setOrderDate(new \DateTime('2019-09-02 17:02:53'));
        $order1->setStatus("processing");
        $order1->setPrice(14.00);
        $order1->addCart($this->getReference("product_0"));

        $order2 = new Order();
        $order2->setCustomer($this->getReference("customer_0"));
        $order2->setOrderDate(new \DateTime('2019-09-02 18:23:32'));
        $order2->setStatus("processing");
        $order2->setPrice(40.00);
        $order2->addCart($this->getReference("product_1"));
        $order2->addCart($this->getReference("product_2"));

        $order3 = new Order();
        $order3->setCustomer($this->getReference("customer_1"));
        $order3->setOrderDate(new \DateTime('2019-09-04 10:32:51'));
        $order3->setStatus("processing");
        $order3->setPrice(120.00);
        $order3->addCart($this->getReference("product_3"));
        $order3->addCart($this->getReference("product_4"));

        $order4 = new Order();
        $order4->setCustomer($this->getReference("customer_2"));
        $order4->setOrderDate(new \DateTime('2019-09-05 08:54:22'));
        $order4->setStatus("canceled");
        $order4->setPrice(14.00);
        $order4->addCart($this->getReference("product_0"));

        $orders = [$order1, $order2, $order3, $order4];
        
        foreach ($orders as $key => $value) {
            $this->setReference("order_$key", $value);
            $manager->persist($value);
        }

        $manager->flush();
    }
   
}
