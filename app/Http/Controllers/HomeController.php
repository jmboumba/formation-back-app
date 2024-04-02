<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    //
    public function redirect(){

        $userrole = Auth::user()->role_id;

        if($userrole == '2'){
            return view('admin.home');
        }
        else{
            return view('user.home');
        }
    }
}
