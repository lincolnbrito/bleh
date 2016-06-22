<?php

namespace LincolnBrito\Bleh\Controllers;

use App\Http\Controllers\Controller;
use LincolnBrito\Bleh\Bleh;

class BlehController extends Controller{
    public function foo(){
        // Init
        $page_title      = 'Title';
        $welcome_message = 'It Works!';

        $data = compact('page_title', 'welcome_message');


        return view('bleh::welcome', $data);
//        return Bleh::saySomething();
//        return 'The controller works!';
    }
}