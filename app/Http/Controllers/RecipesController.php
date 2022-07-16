<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function showRecipes(){
        return view('recipes.showRecipes');
    }
}
