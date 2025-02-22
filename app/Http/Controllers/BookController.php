<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request) {
        
        $validator = $request->validate([
            "nama" => "required",
            "penulis" => "required"
        ]);       

        $bookModel = new Book();

        $bookModel->nama = $validator['nama'];
        $bookModel->penulis = $validator['penulis'];

        $bookModel->save();

        return redirect("/");

    }
}
