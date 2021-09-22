<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductGallery;
use Illuminate\Http\Request;
class ProductController extends BaseController{
  
    public function index(){
        $products=Product::all();
        $products->load('category');
        $this->render('admin.product.Product',
            compact('products')
        );
    }
    public function addPro(){
        $this->render('admin.Product.add');
    }
    public function detail(){
        
        $products=Product::where('id','=',$_GET['proId'])->first();
        $products->load('category');
        $categories=Product::where('cate_id','=',$_GET['cateId'])->where('id','!=',$_GET['proId'])->get();
        $categories->load('category');
        $this->render('clients.product.detail',
            compact('products','categories',//'gals'
            )
        );
        
    }
    public function delete($id){
        $model=Product::find($id);
        $model->delete();
        header('location:'.BASE_URL.'san-pham');
        die;
    }
    public function uploadForm(){
        $this->render('admin.product.upload-form');
    }
    public function addForm(){
        $cates=Category::all();
        $this->render('admin.product.add-form',compact('cates'));
    }
      
  public function saveAdd(){
    $cates=Category::all();
    $requestData=$_POST;
    $errors = [];
    if(strlen($requestData['name']) <= 0){
        $errors['name'] = "Hãy nhập tên sản phẩm";
    }else if(Product::where('name', $requestData['name'])->count() > 0){
        $errors['name'] = "Tên sản phẩm đã tồn tại";
    }

    if(strlen($requestData['price']) <= 0 ){
        $errors['price'] = "Hãy nhập giá";
    }
    if(($requestData['price']) < 0 ){
        $errors['price'] = "Giá không được âm!";
    }

    if(count($errors) > 0){
        
        $this->render('admin.product.add-form', compact('errors','cates'));
        die;
    }
        $requestData = $_POST;

        $file = $_FILES['image'];
        $tmp_name=$file['tmp_name'];
        $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        move_uploaded_file($tmp_name, './' . $filename);
        $requestData['image'] = $filename;
        //dd($requestData);

        $model = new Product();
        $model->fill($requestData);
        $model->save();
        header('location: ' . BASE_URL . 'san-pham');
    }
    public function checkName(){
        $name=$_POST['name'];
        $count=Product::where('name','=',$name)->count();
        echo json_encode($count==0);
    }
    public function editForm($id){
        $pro=Product::find($id);
        $cates=Category::all();
        // dd($cate);
        if(!$pro){
        
            header('location:'.BASE_URL.'san-pham');
            die;
        }
        $this->render('admin.product.edit-form',
        compact('pro','cates')
    );
    }
    public function saveEdit($id){
        $model=Product::find($id);
        
        if(!$model){
            header('location:'.BASE_URL.'san-pham');
            die;
        }
        $requestData=$_POST;
        $file = $_FILES['image'];
        $tmp_name=$file['tmp_name'];
        $filename = 'public/uploads/' . uniqid() . '-' . $file['name'];
        move_uploaded_file($tmp_name, './' . $filename);
        if ($file['size']<=0) {
            $model->image -> $filename;
            
        }else{
            $requestData['image'] = $filename;
        }
        
        // $model->image=$filename;
        $model->fill($requestData);
        $model->save();
        header('location:'.BASE_URL.'san-pham');
        
    }
}