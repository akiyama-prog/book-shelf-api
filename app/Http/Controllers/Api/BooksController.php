<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\Book;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Book::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $book = new Book;
        $book->create([
            'title' => $request->title,
            'author' => $request->author,
            'memo' => $request->memo,
            'contents' => $request->contents,
            'scores' => $request->scores,
            'genre' => $request->genre,
            'is_done' => $request->is_done,
            'finish_date' => $request->finish_date,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  Int  $book_id
     * @return \Illuminate\Http\Response
     */
    public function show($book_id)
    {
        $book = Book::find($book_id);
        return $book;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
