<?php

namespace App\Http\Controllers;
use App\product;
use App\p_off;
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


class searchController extends Controller
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
    
    public function index(Request $req)
    {
        $code=$req->get('search');
        $pro=product::where('ID','=',$code)->get();
        if($pro=='[]')
            return \Redirect::route('home.index')        
                        ->with('pedit', 'Product "'.$code.'" does not exist!'); 
        $p_off=p_off::where('item_id','=',$code)->get();
        $max=0;
        foreach($p_off as $p)
        {
            if($p->p_off>$max)
                $max=$p->p_off;
        }
        foreach ($pro as $p) 
        {
            $old=$p->price;
        }
        $new=$old-($old*$max/100);

        return view('/search',['arr'=>$pro,'mx'=>$max,'nw'=>$new]);
    }  
}
