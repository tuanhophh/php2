<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
class Product extends Model{
    protected $table = 'products';
    public $fillable = [
        'name', 'price', 'cate_id','image','detail'
    ];

    public function category(){
        return $this->belongsTo(Category::class, 'cate_id');
    }
    public function galleries(){
        return $this->belongsTo(ProductGallery::class, 'product_id');
    }
    public function getGallery(){
        
        return $this->hasMany(ProductGallery::class, 'product_id');   
    }
    
}

?>