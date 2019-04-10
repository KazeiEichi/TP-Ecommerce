<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Repository\CategoryRepository;

class CategoryController extends AbstractController
{
    /**
     * @Route("/category", name="category")
     */
    public function generateProduct(ProductRepository $repository, CategoryRepository $catrepo )
    {   
        $product = $repository->findAll();

        $category = $catrepo->findAll();

        return $this->render('category/index.html.twig', [
            'controller_name' => 'CategoryController',
            'products' => $product,
            'categorys' => $category
        ]);
    }


}
