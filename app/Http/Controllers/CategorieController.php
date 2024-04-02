<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
    //
    public function store(Request $request){
        $categorie = new Categorie;

        $categorie->label = $request->label;
        $categorie->save();

        return response()->json(['message' => 'Catégorie add successfully', 'Categorie' => $categorie]);
    }
}
