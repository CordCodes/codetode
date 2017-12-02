<?php
  namespace Cart\Controllers;

  use Slim\Router;
  use Slim\Views\Twig;
  use Cart\Models\Product;
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Cart\Basket\Basket;

  class HomeController{
    public function index(Request $request, Response $response,Twig $view,Product $product, Router $router, Basket $basket){
      $products = $product->get();
      var_dump($basket);
      die();

      return $view->render($response, 'home.twig', [
        'products' => $products,
        'home' => $router->pathFor('home')
      ]);
    }
  }
?>
