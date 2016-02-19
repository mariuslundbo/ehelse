<?php


class StandardFieldController implements iController
{


    private $method, $body, $path;

    public function __construct($path, $method, $body)
    {
        $this->path = $path;
        $this->method = $method;
        $this->body = $body;
    }

    public function getResponse()
    {
        $response = null;

        echo print_r($this->path);
        if(empty($this->path)){
            //if empty array, then get, create, or update a standard field
            if($this->method == 'GET'){
                $response = 'list all std fields';
            }elseif($this->method == 'POST'){
                $response = 'create new std field';
            }
        }elseif(is_numeric($this->path[0])){
            //if not empty, check if number
            if($this->method == 'GET'){
                $response = 'list a std fields';
            }elseif($this->method == 'PUT'){
                $response = 'edit a std field';
            }elseif($this->method == 'DELETE'){
                $response = 'delete std field';
            }
        }else{
            //else return error
            $response = new DescriptionController();
        }
        return $response;
    }
}