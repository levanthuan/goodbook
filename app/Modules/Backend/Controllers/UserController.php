<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserController extends Controller{

    public function index(){
        return view('Backend::users.index');
    }
   
}