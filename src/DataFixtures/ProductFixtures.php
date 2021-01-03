<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product1 = new Product();
        $product1->setSku("ref1");
        $product1->setName("Product 1");
        $product1->setQuantity(1);
        $product1->setUnitPrice(14.00);

        $product2 = new Product();
        $product2->setSku("ref2");
        $product2->setName("Product 2");
        $product2->setQuantity(1);
        $product2->setUnitPrice(10.00);

        $product3 = new Product();
        $product3->setSku("ref3");
        $product3->setName("Product 3");
        $product3->setQuantity(2);
        $product3->setUnitPrice(15.00);

        $product4 = new Product();
        $product4->setSku("ref2");
        $product4->setName("Product 2");
        $product4->setQuantity(10);
        $product4->setUnitPrice(10.00);
        
        $product5 = new Product();
        $product5->setSku("ref4");
        $product5->setName("Product 4");
        $product5->setQuantity(1);
        $product5->setUnitPrice(20.00);

        $products = [$product1, $product2, $product3, $product4, $product5];

        foreach ($products as $key => $value) {
            $this->setReference("product_$key", $value);
            $manager->persist($value);
        }
        $manager->flush();
    }
}
