<?php

namespace App\Http\Controllers;

use App\Models\Book; 
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        try {
            $books = Book::all(); 

            return response()->json(['success' => true, 'data' => $books]); 
        } catch (Exception $e){
            Log::error($e->getMessage(). ' line: ' . $e->getLine() . ' file: ' . $e->getFile()); 

            return response()->json([
                'success' => false,
                'message' => 'Error de servidor',
                'info' => [
                    'info error' -> $e->getMessage(),
                    'file' => $e->getFile(),
                    'line' => $e->getline(),
                    $e->getMessage(),
                ]    
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
     }
}
