<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render(){
        return ['Error' => 'Product not belongs to user'];
    }
}
