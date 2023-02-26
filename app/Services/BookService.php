<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class BookService
{
    use ConsumesExternalServices;

    /**
     * The base uri to consume the books service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.books.base_uri');
    }

    /**
     * Obtain the full list of books from the book service
     * @return string
     */
    public function obtainBooks()
    {
        return $this->performRequest('GET', '/books');
    }

    /**
     * Create an book using the book service
     * @return string
     */
    public function  createBook($data)
    {
        return $this->performRequest('POST', '/books', $data);
    }

    /**
     * Get a specific book from the book service
     * @return string
     */
    public function obtainBook($book)
    {
        return $this->performRequest('GET', "/books/{$book}");
    }

    /**
     * Update an instance of book using the book service
     * @return string
     */
    public function editBook($data, $book)
    {
        return $this->performRequest('PUT', "/books/{$book}", $data);
    }

    /**
     * Delete an instance of book using the book service
     * @return string
     */
    public function deleteBook($book)
    {
        return $this->performRequest('DELETE', "/books/{$book}");
    }

}