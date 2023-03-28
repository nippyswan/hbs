<?php

namespace App\Http\Controllers;
use App\dloc;
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


class dlocController extends Controller
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
    
    public function index(Request $request)
    {
        if (Gate::allows('admin')) 
            {
        
            return view('/dloc');
            }
        else
            abort(403, 'Unauthorized action.');
    }

  

    
    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            $image=$request->file('image'); 
            $cr=new dloc;
            
            if($request->hasFile('image'))
            {
                $p=$image->store('/dloc');
                $path=substr($p, 5);
                $cr->img=$path;
                $cr->save();
            }
           

            return \Redirect::route('dloc.index')        
                        ->with('dlocadd', 'New Locations Page Added!');    
        }
        else
            abort(403, 'Unauthorized action.');   
    }
     public function destroy($q)
    {
        if (Gate::allows('admin')) 
        {
            $cr=dloc::where('id','=',$q)->get();
            foreach($cr as $c)
            {
                Storage::disk('public')->delete('/dloc/'.$c->img);
            }
            dloc::where('id','=',$q)->delete();
            return \Redirect::route('home.index')        
                        ->with('pdel', 'Delivery Locations Page Deleted!');
        }
        else
            abort(403, 'Unauthorized action.');
    }
    
}
