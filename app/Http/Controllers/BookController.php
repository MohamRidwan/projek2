<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data 'book' dan juga 'author'
        // yang berelasi melalui method 'author'
        // yang berasal dari model 'book'
        $books = Book::with('author')->get();
        return view('admin.book.index',compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Mengambil data author
        $author= Author::all();
        return view('admin.book.create', compact('author'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'barang' => 'required|unique:books',
            'status' => 'required',
            'kategori' => 'required',
            'jumlah_unit' => 'required',
            'author_id' => 'required',
            'cover' => 'image|max:2048',
        ]);

        $book = new Book;
        $book->barang = $request->barang;
        $book->author_id = $request->author_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $book->cover = $name;
        }
        $book->status = $request->status;
        $book->kategori = $request->kategori;
        $book->jumlah_unit = $request->jumlah_unit;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $book = Book::findOrFail($id);
        return view('admin.book.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $book = Book::findOrFail($id);
        $author = Author::all();
        return view('admin.book.edit', compact('book', 'author'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        //
        $request->validate([
            'barang' => 'required',
            'author_id' => 'required',
            'status' => 'required',
            'kategori' => 'required',
            'jumlah_unit' => 'required',
        ]);

        $book = Book::findOrFail($id);
        $book->barang = $request->barang;
        $book->author_id = $request->author_id;
        // upload image / foto
        if ($request->hasFile('cover')) {
            $book->deleteImage();
            $image = $request->file('cover');
            $name = rand(1000, 9999) . $image->getClientOriginalName();
            $image->move('images/books/', $name);
            $book->cover = $name;
        }
        $book->status = $request->status;
        $book->kategori = $request->kategori;
        $book->jumlah_unit = $request->jumlah_unit;
        $book->save();
        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $book = Book::findOrFail($id);
        $book->deleteImage();
        $book->delete();
        return redirect()->route('books.index');
    }
}
