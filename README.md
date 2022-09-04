# Documentacion eTest(Back)

En este apartado se describe la arquitectura la cual tendra el Back-End y las correspondietnes tecnologías usadas, en este caso en especifico se usa el Lumen, conectado a una base de datos MYSQL.

A continuacion se explicaran los metodos que este contiene en cada uno de los controladores:

## Controlador de categorias

## Retorno de lista con las categorias:
    public function index(){

        $category = Category::all();

        return $this -> succesResponse( $category );

    }
    
## Controlador de productos:


## Metodo que retorna la lista de productos:

    public function index(){

        $product = Product::all();

        return $this -> succesResponse( $product );

    }
    
## Metodo que se encarga de buscar productas segun caracteres ingresados por el usuario:

    public function search( Request $request ){

        $search = trim($request -> get('search'));
        $product = DB::table('product')
                     -> select('name', 'url_image', 'price')
                     -> where('name', 'LIKE', '%'.$search.'%')
                     -> orderBy('name','asc')
                     -> paginate(10);

        return $this -> succesResponse( $product );

    }
