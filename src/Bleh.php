<?php
namespace LincolnBrito\Bleh;

class Bleh {
    public static function saySomething() {
        return config('bleh.message');
        // return 'Hello World!';
    }
}