<?php
namespace App\Controllers;
use App\Models\Product;

class CartController extends BaseController{
    
    public $product=null;
    public $totalPrice=0;
    public $totalQty=0;
    public function index(){
        if($_SESSION['cart']==false){

        
            $_SESSION['cart'] = [
                'id' => $user->id,
                'name' => $user->name,
                'role' => $user->role,
                'email' => $user->email
            ];
        }
    }
    
}
?>