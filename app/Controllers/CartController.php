<?php
  namespace Cart\Controllers;

  use Cart\Basket\Basket;
  use Cart\Models\Product;
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Router;
  use Slim\Views\Twig;

  class CartController{
    protected $basket;
    public function __construct(Basket $basket, Product $product){
      $this->basket = $basket;
      $this->product = $product;
    }
    public function index(Request $request,Response $response,Twig $view){
      return $view->render($response,'cart/index.twig');
    }
    public function add($slug,$quantity,Request $request,Response $response,Router $router){
      $product = $this->product->where('slug',$slug)->first();
      if (!$product){
        return $response->withRedirect($router->pathFor('home'));
      }
      try {
        $this->basket->add($product,$quantity);
      } catch (QuantityExceededException $e) {
        die($e);
      }
      return $response->withRedirect($router->pathFor('cart.index'));
    }
  }
?>
