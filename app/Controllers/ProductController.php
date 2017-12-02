<?php

  namespace Cart\Controllers;

  use Cart\Models\Product;
  use Slim\Views\Twig;
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;

  class ProductController{
    public function get($slug,Request $request,Response $response,Twig $view,Product $product){
      return $view->render($response,'products/product.twig');
    }
  }
?>
