<?php
namespace LincolnBrito\Bleh;

class Bleh {
    public static function saySomething() {
        return config('bleh.message');
    }

    public static function sayAnother() {
        return config('bleh_config1.another');
    }
}