<?php
namespace App\Modules\Backend\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class IndexController extends Controller{

    public function index(){
        return view('Backend::layouts.master');
    }
   
}