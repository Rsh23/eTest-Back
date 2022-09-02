<?php

namespace App\Http\Controllers;

use App\Models\Category;

use App\Traits\ApiResponser;
use Illuminate\Http\Client\Request;

class CategoryController extends Controller
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

    // Esto retornara la lista de categorias
    public function index(){

        $category = Category::all();

        return $category;

    }

    // Esto creara una instancia de category
    // public function store( Request $request ){

    // }

    // Esto se encargara de mostrar la informacion de una categoria en especifico
    public function show( $category ){

    }
}
