<?php
namespace App\Controllers;
use App\Models\User;

class PhanTrangController extends BaseController
{
    
    public function index()
    {   $users = User::paginate(5);
        
        $this->render('admin.user.index',compact('users')
    );
    
    
}
}