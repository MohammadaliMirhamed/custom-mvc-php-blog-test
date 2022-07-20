<?php

namespace App\Libs\Contracts;

interface RequestInterface
{
    /**
     * Get the value of a given key from the request.
     
     * @param  string $key
     * @param  mixed $default
     * @return mixed
     */
    public function get($key, $default = null) :mixed;

    /**
     * Get all of the input and return it as an array.
     *
     * @return array
     */
    public function all() :array;
}