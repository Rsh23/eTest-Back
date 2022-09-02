<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ApiResponser;

class ProductController extends Controller
{
    use ApiResponser;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // Esto retornara la lista de productos
    public function index(){

        // $product = Product::all();

        // return $product;

        return 'hola';

    }

    // Esto se encargara de mostrar la informacion de un producto en especifico
    public function show( $product ){

    }

}
