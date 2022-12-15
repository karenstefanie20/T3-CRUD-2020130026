<?php

namespace App\Http\Controllers;

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
        $books = Book::all();
 return view('books.index', compact('books'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('books.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'id' => 'required',
            'judul' => 'required|max:255',
            'halaman' => 'required|integer|max:100',
            'kategori' => 'required',
            'penerbit' => 'required|min:1900|max:2099',

        ]);
        //$book = new Book();
        //$book->id = $validateData['id'];
        //$book->judul = $validateData['judul'];
        //$book->halaman = $validateData['halaman'];
        //$book->kategori = $validateData['kategori'];
        //$book->penerbit = $validateData['penerbit'];
        Book::create($validateData);


        //$book->save();
        $request->session()->flash('success',"Successfully adding {$validateData['title']}!");

        return "Data berhasil ditambahkan!";

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function show(Book $book)
    {
       // dump($book);
       return view('movies.show', compact('movie'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book)
    {
        dump($request->all());
 dump($movie);

 $validateData = $request->validate([
    'id' => 'required',
    'judul' => 'required|max:255',
    'halaman' => 'required|integer|max:100',
    'kategori' => 'required',
    'penerbit' => 'required|min:1900|max:2099',
 ]);

 $book->update($validateData);
 $request->session()
 ->flash('success',"Successfully updating {$validateData['title']}!");
 return redirect()->route('books.index');


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Book  $book
     * @return \Illuminate\Http\Response
     */
    public function destroy(Book $book)
    {
        $book->delete();
 return redirect()->route('books.index')->with(
    \'success',"Successfully deleting {$movie['title']}!"
);
    }
}
