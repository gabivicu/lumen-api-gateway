<?php

namespace App\Services;

use App\Traits\ConsumesExternalServices;

class AuthorService
{
    use ConsumesExternalServices;


        /**
     * The secret to consume the authors service
     * @var string
     */
    public $secret;


    /**
     * The base uri to consume the authors service
     * @var string
     */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri = config('services.authors.base_uri');
        $this->secret = config('service.authors.secret');
    }

    /**
     * Obtain the full list of authors from the author service
     * @return string
     */
    public function obtainAuthors()
    {
        return $this->performRequest('GET', '/authors');
    }

    /**
     * Create an author using the author service
     * @return string
     */
    public function  createAuthor($data)
    {
        return $this->performRequest('POST', '/authors', $data);
    }

    /**
     * Get a specific author from the author service
     * @return string
     */
    public function obtainAuthor($author)
    {
        return $this->performRequest('GET', "/authors/{$author}");
    }

    /**
     * Update an instance of author using the author service
     * @return string
     */
    public function editAuthor($data, $author)
    {
        return $this->performRequest('PUT', "/authors/{$author}", $data);
    }

    /**
     * Delete an instance of author using the author service
     * @return string
     */
    public function deleteAuthor($author)
    {
        return $this->performRequest('DELETE', "/authors/{$author}");
    }

}