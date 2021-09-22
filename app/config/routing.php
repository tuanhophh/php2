<?php
use App\Controllers\LoginController;
use App\Controllers\CategoryController;
use App\Controllers\HomeController;
use App\Controllers\HomeClientController;
use Phroute\Phroute\RouteCollector;
use App\Controllers\ProductController;
use App\Controllers\PhanTrangController;
use App\Controllers\ProductGalleryController;
use App\Controllers\CartController;
use App\Models\User;
$url=isset($_GET['url']) ? $_GET['url'] :"/" ;
$router = new RouteCollector();
$router->filter('auth',function(){
    if(!isset($_SESSION['AUTH']) || empty($_SESSION['AUTH'])){
        header('location:'. BASE_URL.'login');
        die;
    }
});
$router->group(['before' => 'auth'],function($router){
    $router->get('danh-muc/addCate',[CategoryController::class,'addForm']);
    $router->post('danh-muc/addCate',[CategoryController::class,'saveAdd']); 
    $router->get('danh-muc/editCate/{id}',[CategoryController::class,'editForm']);
    $router->post('danh-muc/editCate/{id}',[CategoryController::class,'saveEdit']);
    $router->get('danh-muc/deleteCate/{id}',[CategoryController::class,'delete']);

    $router->get('san-pham/addPro',[ProductController::class,'addForm']);
    $router->post('san-pham/addPro',[ProductController::class,'saveAdd']);
    $router->get('san-pham/editPro/{id}',[ProductController::class,'editForm']);
    $router->post('san-pham/editPro/{id}',[ProductController::class,'saveEdit']);
    $router->get('san-pham/deletePro/{id}',[ProductController::class,'delete']);

    $router->get('product-gallery/addGal',[ProductGalleryController::class,'addForm']);
    $router->post('product-gallery/addGal',[ProductGalleryController::class,'saveAdd']); 
    $router->get('product-gallery/editGal/{id}',[ProductGalleryController::class,'editForm']);
    $router->post('product-gallery/editGal/{id}',[ProductGalleryController::class,'saveEdit']);
    $router->get('product-gallery/deleteGal/{id}',[ProductGalleryController::class,'delete']);

    $router->get('demo-upload',[ProductController::class,'uploadForm']);
    $router->post('demo-upload',[ProductController::class,'saveImage']);
    $router->get('admin',[HomeController::class,'index']);
    $router->get('danh-muc',[CategoryController::class,'index']);
    $router->get('san-pham',[ProductController::class,'index']);
    $router->get('product-gallery',[ProductGalleryController::class,'index']);
    
    $router->post('danh-muc/check-name', [CategoryController::class,'checkName']);
    $router->post('san-pham/check-name', [ProductController::class,'checkName']);
});
$router->get('/',[HomeClientController::class,'index']);
$router->get('shop',[HomeClientController::class,'shop']);
$router->get('detail-sanpham',[ProductController::class,'detail']);

$router->get('login',[LoginController::class,'loginForm']);
$router->post('login',[LoginController::class,'postLogin']);
$router->get('logout',[LoginController::class,'logOut']);
$router->get('users', [PhanTrangController::class,'index']);
$router->get('cart', [CartController::class,'index']);

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains


$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'],$url);
    
// Print out the value returned from the dispatched function
echo $response;
?>