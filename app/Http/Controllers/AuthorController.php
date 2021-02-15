<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    /**
     * Return authors list
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        # code...
    }

    /**
     * Create a instance of author
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        # code...
    }

    /**
     * Return an specific author
     * 
     * @param App\Models\Author $author
     * @return Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        # code...
    }

    /**
     * update the information of an existing author
     * 
     * @param Illuminate\Http\Request $request
     * @param App\Models\Author $author
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        # code...
    }

    /**
     * destroy an existing author
     *
     * @return Illuminate\Http\Response
     */
    public function destroy(Author $author)
    {
        # code...
    }

}