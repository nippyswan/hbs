<?php

namespace App\Http\Controllers;
use App\product;

use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use \Stevebauman\EloquentTable\TableTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Support\Facades\Storage;


class shopController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function index()
    {
        return view('home');
    }*/
    
    public function index($q)
    {
        
       
        $ear1=product::where('category','=',$q)            
        ->where('sub_category','=','ear')
        ->get();

        $neck1=product::where('category','=',$q)            
        ->where('sub_category','=','neck')
        ->get();

        $bang1=product::where('category','=',$q)            
        ->where('sub_category','=','bang')
        ->get();

        $ring1=product::where('category','=',$q)            
        ->where('sub_category','=','ring')
        ->get();

        $none1=product::where('category','=',$q)            
        ->where('sub_category','=','none')
        ->get();

        return view('/shop',['ear' => $ear1,'neck' => $neck1,'bang' => $bang1,'ring' => $ring1,'none' => $none1,'qr' => $q]);
      
    }
    
   
   

  
}
