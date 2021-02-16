<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthorController extends Controller
{
    use ApiResponse;

    /**
     * Return authors list
     *
     * @return Illuminate\Http\Response
     */
    public function index()
    {
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    /**
     * Create a instance of author
     * 
     * @param Illuminate\Http\Request $request
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'name' => 'required|max:255',
            'gender' => 'required|max:255|in:male,female',
            'country' => 'required|max:255'
        ];

        $this->validate($request,$rules);

        $author = Author::create($request->all());

        return $this->successResponse($author,Response::HTTP_CREATED);
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