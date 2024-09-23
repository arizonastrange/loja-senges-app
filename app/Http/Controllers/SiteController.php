<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Products;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    //
    public function index(){
        $produtos = Products::paginate(20);
        $categorias = Category::all();
        return view('site.home', compact(['produtos', 'categorias']));
    }
}
