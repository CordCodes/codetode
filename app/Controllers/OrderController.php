<?php
  namespace Cart\Controllers;
  use Cart\Basket\Basket;
  use Cart\Models\Product;
  use Psr\Http\Message\ResponseInterface as Response;
  use Psr\Http\Message\ServerRequestInterface as Request;
  use Slim\Views\Twig;
  use Slim\Router;

  class OrderController{
    protected $basket;
    protected $router;

    public function __construct(Basket $basket,Router $router){
      $this->basket = $basket;
      $this->router = $router;
    }
    public function index(Request $request,Response $response, Twig $view){
      $this->basket->refresh();

      if (!$this->basket->subTotal()) {
        return $response->withRedirect($this->router->pathFor('cart.index'));
      }

      return $view->render($response,'order/index.twig');
    }
    public function create(Request $request, Response $response){
      $this->basket->refresh();
      if (!$this->basket->subTotal()) {
        return $response->withRedirect($this->router->pathFor('cart.index'));
      }
    }
  }
?>
