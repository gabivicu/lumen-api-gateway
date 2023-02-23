<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use App\Models\Book;
use Illuminate\Support\Facades\Auth;
use App\Services\BookService;


class BookController extends Controller
{
    use ApiResponser;

    /**
     * The service to consume the books microservice
     * @var BookService
     */
    public $bookService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(BookService $bookService)
    {
        $this->bookService = $bookService;
    }

    /**
     * Return the list of books
     * @return Illuminate\Http\Response
     */
    public function index()
    {
    }

    /**
     * Create a new book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }
    
    /**
     * Show details of a book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {
    }

        /**
     * Updates an existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {
    }

        /**
     * Delete a book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {
    }
}
