<?php
  use Cart\Basket\Basket;
  use Cart\Models\Product;
  use Cart\Support\Storage\Contracts\StorageInterface;
  use Cart\Support\Storage\SessionStorage;
  use function DI\get;
  use Interop\Container\ContainerInterface;
  use Slim\Interfaces\RouterInterface;
  use Slim\Views\Twig;
  use Slim\Views\TwigExtension;

  return [
    RouterInterface::class => function (ContainerInterface $container) { return $container->get('router'); },
    StorageInterface::class => function(ContainerInterface $c){
      return new SessionStorage('cart');
    },
    Twig::class => function(ContainerInterface $c){
      $twig = new Twig(__DIR__ . '/../resources/views',[
        'cache' => false
      ]);
      $twig->addExtension(new TwigExtension(
        $c->get('router'),
        $c->get('request')->getUri()
      ));
      return $twig;
    },
    Product::class => function (ContainerInterface $c){
      return new Product;
    },
    Basket::class => function(ContainerInterface $c){
      return new Basket(
        $c->get(SessionStorage::class),
        $c->get(Product::class)
      );
    }
  ];
?>
