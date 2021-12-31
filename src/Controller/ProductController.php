<?php

namespace App\Controller;

use App\Entity\Product;
use App\Entity\Image;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    /*#[Route('/product', name: 'product')]
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }*/

    /**
     * @Route("/product/{product_id}", name="product")
     * @param ManagerRegistry $managerRegistry
     * @return Response
     */
    public function getProduct($product_id, ManagerRegistry $managerRegistry) : Response
    {
        $manager = $managerRegistry->getRepository(Product::class);
        $product = $manager->find($product_id);
        /*foreach($product->getImage() as $image)
        {
            echo $image;
        }
        die();*/
    }

    public function insertProduct(ManagerRegistry $managerRegistry)
    {
        $manager = $managerRegistry->getManager();
        $image1 = new Image();
        $image1->setPath('https://raw.githubusercontent.com/Kondratyi/Static/master/img/product(1)_4.png');
        $image2 = new Image();
        $image2->setPath('https://raw.githubusercontent.com/Kondratyi/Static/master/img/product(1)_5.png');

        $product = new Product();
        $product->setName('Product_4');
        $product->setPrice('123.23');
        $image1->setProduct($product);
        $image2->setProduct($product);
        $product->addImage($image1);
        $product->addImage($image2);

        $manager->persist($product);
        $manager->persist($image1);
        $manager->persist($image2);
        $manager->flush();
    }
}
