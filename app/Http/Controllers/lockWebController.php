<?php

namespace App\Http\Controllers;
use App\lockWeb;
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


class lockWebController extends Controller
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
            $lc=lockWeb::all();
            if($lc!='[]')
            foreach ($lc as $l) {
                $lck=$l->status;
            }
            else
                $lck=0;
        
            return view('/lockWeb',['l'=>$lck]);
            }
        else
            abort(403, 'Unauthorized action.');
    }

  

    
    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            $lock=$request->get('lock');
            $lc=lockWeb::all();
            $c=0;
            foreach($lc as $l)
            {
                $id=$l->id;
                $c++;
            } 
            if($c==0)
            {
                $lck=new lockWeb;
                $lck->status=$lock;
                $lck->save();
            }
            else
                lockWeb::where('id','=',$id)->update(['status'=>$lock]);
            
            return \Redirect::route('home.index')        
                        ->with('padd', 'Lock status changed to "'.$lock.'"!');    
        }
        else
            abort(403, 'Unauthorized action.');   
    }
     
    
}
