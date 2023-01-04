<?php
namespace app\Http\Controllers;

use app\Http\cart;
use Illuminate\Http\Request;

class Carrinhocontroller extends Controller{

    public function carrinhoLista(){
        $itens = \cart::getContent();
        dd($itens);
    }
}