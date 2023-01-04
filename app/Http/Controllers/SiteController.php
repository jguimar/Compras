<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
use App\Models\Categoria;

class SiteController extends Controller
{
    public function index()
    {
        $produtos = produto::paginate(5);
       
        return view('site.home', compact('produtos'));
    }

    public function details ($slug){

        $produto = Produto::where('slug', $slug)->first();

        return view('site.details', compact('produto'));
    }

    public function categoria ($id){
        $categoria = Categoria::find($id);
        $produto = Produto::where('id_details', $id)->paginate(5);

        return view('site.categoria', compact('produto'));
    }
}
