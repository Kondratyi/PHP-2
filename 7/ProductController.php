<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/product/{product_id}', name: 'product')]
    public function getProduct($product_id, ManagerRegistry $managerRegistry) : Response
    {
        $manager = $managerRegistry->getRepository(Product::class);
        $product = $manager->find($product_id);
        $name = $product->getName();
        $price = $product->getPrice();
        echo "<div>Товар: $name</div>";
        echo "<div>Цена: $price</div>";
        die();
    }
}


