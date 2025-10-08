<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function index2()
    {
        return view('index2');
    }    
    public function index3()
    {
        return view('index3');
    }  
    public function about()
    {
        return view('about');
    } 
    public function blog2coulmn()
    {
        return view('blog2coulmn');
    } 
    public function blogdetails()
    {
        return view('blogdetails');
    }
    public function bloggrid()
    {
        return view('bloggrid');
    }    
    public function contact()
    {
        return view('contact');
    }       
    public function faq()
    {
        return view('faq');
    }  
    public function pricing()
    {
        return view('pricing');
    } 
    public function project()
    {
        return view('project');
    } 
    public function projectdetails()
    {
        return view('projectdetails');
    } 
    public function testimonial()
    {
        return view('testimonial');
    } 
    public function service()
    {
        return view('service');
    } 
    public function servicedetails()
    {
        return view('servicedetails');
    } 
    public function team()
    {
        return view('team');
    } 
     public function teamdetails()
    {
        return view('teamdetails');
    }    
    public function datacenter()
    {
        return view('datacenter');
    } 
    public function gemo()
    {
        return view('gemo');
    } 
    public function switchgear()
    {
        return view('switchgear');
    } 
    public function transformer()
    {
        return view('transformer');
    } 
    public function ss()
    {
        return view('ss');
    } 
    public function pumpsystem()
    {
        return view('pumpsystem');
    } 
    public function instrumentation()
    {
        return view('instrumentation');
    }
    public function cable()
    {
        return view('cable');
    } 
    public function tools()
    {
        return view('tools');
    }  
    public function projek()
    {
        return view('projek');
    } 

}
