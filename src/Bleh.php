<?php
namespace LincolnBrito\Bleh;

class Bleh {
    public static function saySomething() {
        return config('bleh.message');
        // return 'Hello World!';
    }

    public static function sayAnother() {
        return config('bleh.another.another_message');
    }
}