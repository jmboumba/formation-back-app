<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index(){
        $users = User::all();

        return response()->json(['message' => 'Liste des utilisateurs', 'data' => $users]);
    }

    public function findOne($id){
        $user = User::find($id);

        return response()->json(['User' => $user]);
    }

   
}
