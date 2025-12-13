<?php

namespace App\Http\Controllers\Unauth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pagecontroller extends Controller
{
    //
    public function Homepage(){
        return view('Frontend/Homepage');
    }

    public function About(){
        return view('Frontend.About');
    }

    public function Contact(){
        return view('Frontend.Contact');
    }

    public function Logistics(){
        return view('Frontend.Logistics');
    }
    public function Services(){
        return view('Frontend.Services');
    }

    
}
