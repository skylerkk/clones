<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function books(){
        return Book::get();
    }

    public function getbook($id){
        return Book::find($id);
    }

    public function deletebook(Request $request){
        Book::find($request->id)->delete();
    }
}