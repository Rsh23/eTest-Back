<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $product = Product::all();

        return $this -> succesResponse( $product );

    }

    // Esto se encargara de buscar productos
    public function search( Request $request ){

        $search = trim($request -> get('search'));
        $product = DB::table('product')
                     -> select('name', 'url_image', 'price')
                     -> where('name', 'LIKE', '%'.$search.'%')
                     -> orderBy('name','asc')
                     -> paginate(10);

        return $this -> succesResponse( $product );

    }

}