<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use Exception;

class BookController extends Controller
{
    //
    public function listBook(){
        $libros = Book::get();
        
        return response()->json([
            'libros' => $libros,
            'status'   => true
        ]);
    }

    public function findBook($codigo){
        $libro = Book::findOrFail($codigo);
        
        return response()->json([
            'libro' => $libro,
            'status'   => true
        ]);
    }


    /**
     * Realiza el registro de un nuevo libro
     * Tipo: POST
     * @author: Carlos Lopez
     */
    public function saveBook(Request $request){
        // Crea un nuevo usuario en la base de datos
        try{
            $libro = new Book;
            $libro->title    = $request->titulo;
            $libro->author   = $request->autor;
            $libro->genero   = $request->genero;
            $libro->year = $request->año;

            $libro->save();

            return response()->json([
                'message' => 'Libro registrado con éxito',
                'status'  => true]);

        }catch(Exception $e){
            return response()->json([
                'message' => 'Error en registro de libro',
                'status'  => false]);
        }
    }

    /**
     * Realiza la actualizacion de un nuevo libro
     * Tipo: POST
     * @author: Carlos Lopez
     */
    public function updateBook(Request $request, $codigo){
        // Crea un nuevo usuario en la base de datos
        try{
            $libro = Book::findOrFail($codigo);
            $libro->title    = $request->titulo;
            $libro->author   = $request->autor;
            $libro->genero   = $request->genero;
            $libro->year = $request->año;

            $libro->update();

            return response()->json([
                'message' => 'Libro actualizado con éxito',
                'status'  => true]);

        }catch(Exception $e){
            return response()->json([
                'message' => 'Error en actualizacion de libro',
                'status'  => false]);
        }
    }
}
