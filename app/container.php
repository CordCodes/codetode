<?php
  use Slim\Views\Twig;
  use Slim\Views\TwigExtension;
  use Interop\Container\ContainerInterface;
  use Slim\Interfaces\RouterInterface;
  use function DI\get;
  use Cart\Models\Product;

  return [
    RouterInterface::class => function (ContainerInterface $container) { return $container->get('router'); },
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
    }
  ]
?>
