<?php
// src/DataFixtures/ProductFixture.php
namespace App\DataFixtures;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
         $product = new Product();
         $product->setName('Priceless widget!');
         $product->setPrice(14.50);
         $product->setDescription('ok, I guess it *does* have a price');
         $manager->persist($product);

         // ass more products

        $manager->flush();
    }
}
