<?php

namespace App\Traits;

use Illuminate\Http\Response;

trait ApiResponser{


    // Esto se encarga de construir una respuesta con resultado exitoso
    public function succesResponse( $data, $code = Response::HTTP_OK ) {

        return response() -> json( ['data' => $data], $code );

    }

    // Esto se encarga de construir las respuestas cuando hay algun error
    public function errorResponse( $message, $code ) {
        
        return response() -> json( ['error' => $message, 'code' => $code], $code );

    }

}