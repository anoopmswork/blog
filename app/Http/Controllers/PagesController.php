<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller {

    public function index() {
        
    }
    

    public function about() {
        $first="Anoop";
        $last ="MS";
        $cycle="Trek";
        $hobby="Cycling";
        $fitness="Stair climbing";
        return view('page.about',  compact('first','last','cycle'));
    }

}
