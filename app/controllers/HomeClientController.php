<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;


class HomeClientController extends BaseController{
    public function index(){
            $products=Product::where('id','>',0)->orderBy('created_at')->limit(4)->get();
            $products->load('category');
            if(isset($_GET['cateId'])){
            $categories=Product::where('cate_id','=',$_GET['cateId'])->get();
            $categories->load('category');
            }
            // echo "<pre>";
            // var_dump($categories);die;
            $cates=Category::all();
            if(isset($_GET['cateId'])){
            $this->render('clients.home',
            compact('products','categories','cates')
            );
        }else{
            $this->render('clients.home',
            compact('products','cates')
            );
        }
        
        
    }
    public function shop(){
            $cates=Category::all();
            if(isset($_GET['key'])){
            $pros=Product::where('name','like','%'.$_GET['key'].'%')->get();
            $pros->load('category');
            // echo "<pre>";
            // var_dump($pros);die;
            $this->render('clients.shop',
                compact('pros','cates')
            );
        }
            else if(isset($_GET['cateId'])){  
            $products=Product::all();
            $products->load('category'); 
            $categories=Product::where('cate_id','=',$_GET['cateId'])->get();
            $categories->load('category');
            $this->render('clients.shop',
            compact('products','categories','cates')
            );
        }
            else if(!isset($_GET['cateId'])){
            $products=Product::all();
            $products->load('category');
            $this->render('clients.shop',
            compact('products','cates')
            );
        };    
    } 
}



?>