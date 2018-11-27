<?php
namespace App\Modules\Backend\Controllers;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AuthController extends Controller{

    public function getLogin(Request $request){

        return view('Backend::auth.login',[]);
    }
   
}