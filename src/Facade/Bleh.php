<?php
namespace LincolnBrito\Bleh\Facade;

use Illuminate\Support\Facades\Facade;

class Bleh extends Facade {

    protected static function getFacadeAccessor()
    {
        return 'bleh';
    }
}