<?php

namespace App\Libs;

use App\Libs\Contracts\RequestInterface;

class Request implements RequestInterface
{
    protected $request;
    
    /**
     * Constructor for Request class.
     */
    public function __construct()
    {
        $this->request = $_REQUEST;
    }
    
    /**
     * Get the value of a given key from the request.
     * 
     * @param  string $key
     * @param  mixed $default
     * @return mixed
     */
    public function get($key, $default = null) :mixed
    {
        if (array_key_exists($key, $this->request)) {
            return $this->request[$key];
        }
        
        return $default;
    }
    
    /**
     * Get all of the input and return it as an array.
     * 
     * @return array
     */
    public function all() :array
    {
        return $this->request;
    }

}

