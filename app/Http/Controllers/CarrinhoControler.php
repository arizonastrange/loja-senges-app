<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarrinhoControler extends Controller
{
    //
    public function lista(){
        $items = \Cart::getContent();
        return view('site,carrinho', compact('itens'));
    }
}
