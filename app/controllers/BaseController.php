<?php
namespace App\Controllers;
use Jenssegers\Blade\Blade;
// use Illuminate\Pagination\Paginator;
// use Illuminate\Pagination\LengthAwarePaginator;
// use  Illuminate\Pagination\CursorPaginator;
class BaseController{
    protected function render($view,$data=[]){
        $blade = new Blade('./app/views', './storage');
        //views la thu muc chua file blade
        //storage la thu muc sau khi tao xong se chua
        echo $blade->make($view,$data)->render();
    }
}
?>