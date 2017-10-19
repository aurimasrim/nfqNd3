<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Category;
use AppBundle\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ProductController extends Controller
{
    /**
     * @Route("/save")
     */
    public function saveProductAction()
    {

        $category = new Category();
        $category->setTitle('Drinks');
        $product = new Product();
        $product->setTitle('Coca-cola');
        $product->setPrice('1.45');
        $product->setCategory($category);
        $product->setActive(true);

        $em = $this->getDoctrine()->getManager();
        $em->persist($product);

        $em->flush();
        return $this->render('AppBundle:Product:save_product.html.twig', array(
            // ...
        ));
    }

    /**
     * @Route("/delete/{id}")
     * @ParamConverter("product", class="AppBundle:Product")
     */
    public function deleteProductAction(Product $product)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($product);
        $em->flush();
        return $this->render('AppBundle:Product:delete_product.html.twig', array(
            // ...
        ));
    }

}
