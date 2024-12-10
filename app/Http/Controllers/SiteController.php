<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function home(){
        return view('home');
    }
    function about(){ 
        return view('about');
    }
    function contact(){
        return view('contact');
    }
    function propertylist(){
        return view('propertylist');
    }

    function porpertytype(){
        return view('porpertytype');
    }

    function propertyagent(){
        return view('propertyagent');
    }

    function testimonial(){
        return view('testimonial');
    }
   

}
