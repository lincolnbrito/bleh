<?php

namespace LincolnBrito\Bleh\Controllers;

use App\Http\Controllers\Controller;
use LincolnBrito\Bleh\Bleh;

class BlehController extends Controller{
    public function foo(){
        return view('bleh::welcome');
//        return Bleh::saySomething();
//        return 'The controller works!';
    }
}