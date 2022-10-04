<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index() {

        $products = Product::all();
        return view('products.index');

    }

    public function create() {
        return 'Creando productos desde el controlador';
    }

    public function store (){
     //
    }

    public function show ($product){

        $product = Product::findOrFail($product);
        return view('products.show');
    }

    public function edit ($product){
        return "Editando el producto con la id {$product} desde el controlador";
    }

    public function update ($product){
        //
    }

    public function destroy ($product){
       //
    }
}
