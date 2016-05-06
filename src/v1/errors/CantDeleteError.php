<?php
require_once 'ApplicationError.php';

class CantDeleteError extends ApplicationError
{
    protected $response_code = Response::STATUS_CODE_METHOD_NOT_ALLOWED;    // TODO: find a better code

    /**
     * Constructor for cant delete error.
     * @param $method String with request method not allowed for current path
     */
    public function __construct()
    {
        $this->title = "Error: Can't delete";
        $this->message = 'Element can\'t be deleted.';
    }
}