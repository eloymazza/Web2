<?php
  define('RESOURCE', 0);
  define('PARAMS', 1);

  include_once('config/routerClass.php');
  include_once('apiController/digimonApiController.php');

  $router = new Router();
  //url, verb, controller, method
  $router->AddRoute("digimon", "GET", "DigimonApiController", "getDigimons");
  $router->AddRoute("", "GET", "DigimonApiController", "getDigimons");
  /*
  $router->AddRoute("products/:id", "GET", "ProductsApiController", "getProduct");
  $router->AddRoute("products", "POST", "ProductsApiController", "createProduct");
  $router->AddRoute("products/:id", "PUT", "ProductsApiController", "editProduct");
  $router->AddRoute("products/:id", "DELETE", "ProductsApiController", "deleteProduct");
  $router->AddRoute("categories", "GET", "CategoriesApiController", "getCategories");
  $router->AddRoute("categories/:id", "GET", "CategoriesApiController", "getCategory");
  $router->AddRoute("categories/:id", "PUT", "CategoriesApiController", "editCategory");
  $router->AddRoute("categories", "POST", "CategoriesApiController", "createCategory");
  $router->AddRoute("categories/:id", "DELETE", "CategoriesApiController", "deleteCategory");
  $router->AddRoute("comments/:id", "GET", "CommentsApiController", "getComments");
  $router->AddRoute("comments/:id", "POST", "CommentsApiController", "createComment");
  $router->AddRoute("comments/all/:id", "DELETE", "CommentsApiController", "deleteAllComments");
  $router->AddRoute("comments/:id", "DELETE", "CommentsApiController", "deleteComment");
  */

  $route = $_GET['resource'];
  $array = $router->Route($route);
  if(sizeof($array) == 0)
    echo "404";
  else
  {
    $controller = $array[0];
    $metodo = $array[1];
    $url_params = $array[2];
    echo (new $controller())->$metodo($url_params);
  }

?>
