<?php

namespace App\Http\Controllers;
use App\custReview;
use Image;

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


class custReviewController extends Controller
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
        
            return view('/custReview');
            }
        else
            abort(403, 'Unauthorized action.');
    }

  

    
    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            $image=$request->file('image'); 
            $cr=new custReview;
            
            if($request->hasFile('image'))
            {
                
                    $p=$image->store('/custReview');
                    $path=substr($p, 11);
                    $destinationPath = public_path('/storage/custReview/low');
                    $img = Image::make($image->getRealPath());
                    $img->resize(170,302.373333, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/low_'.$path);
                    $cr->img=$path;
                    $cr->save();
            }
           

            return \Redirect::route('custReview.index')        
                        ->with('revadd', 'New Review Added!');    
        }
        else
            abort(403, 'Unauthorized action.');   
    }
     public function destroy($q)
    {
        if (Gate::allows('admin')) 
        {
            $cr=custReview::where('id','=',$q)->get();
            foreach($cr as $c)
            {
                Storage::disk('public')->delete('/custReview/'.$c->img);
                Storage::disk('public')->delete('/custReview/low/low_'.$c->img);
            }
            custReview::where('id','=',$q)->delete();
            return \Redirect::route('home.index')        
                        ->with('pdel', 'Review Deleted!');
        }
        else
            abort(403, 'Unauthorized action.');
    }
    public function show($q)
    {
        $cr=custReview::where('id','=',$q)->get();
        foreach ($cr as $c) {
            $img=$c->img;
        }
        return view('/custReviewShow',['im'=>$img,'id'=>$q]);
    }
    public function showLow($q)
    {
        $cr=custReview::all();
        return view('/custReviewShowLow',['crr'=>$cr]);
    }
    
}
