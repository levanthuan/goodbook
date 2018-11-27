<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller{

    public function index(){
    	dd('thuan');

        return view('Backend::admin.login',[]);
    }
   
}