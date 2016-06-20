<?php
namespace LincolnBrito\Bleh;

class Bleh {
    public static function saySomething() {
        return [
            trans('bleh::messages.greeting'),
            config('bleh.message')
        ];
        // return config('bleh.message');
        // return 'Hello World!';
    }

    public static function sayAnother() {
        return config('bleh_config1.another');
    }
}