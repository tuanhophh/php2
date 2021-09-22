<?php
namespace App\Controllers;
use App\Models\Product;


class HomeController extends BaseController{
    public function index(){
        
        
        // $product=Product::find($_GET['id']);
        // $product=Product::find(345);
        // $product->load('category','galleries');
        // $this->render('clients.homepage',[
        //     'product'=>$product
        // ]);
        //lay ra va hien thi danh sach cac san pham
        $products=Product::all();
        $products->load('category');
        $this->render('admin.homepage',
            compact('products')
        );

        // include_once './app/views/clients/homepage.blade.php';
    }

    
}


?>