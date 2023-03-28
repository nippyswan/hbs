<?php

namespace App\Http\Controllers;
use App\product;
use App\offer;
use App\p_off;
use App\custReview;
use App\dloc;
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


class homeController extends Controller
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
        $lc=lockWeb::all();
        foreach ($lc as $l) {
            $st=$l->status;
        }
       
        if($st==0||(Gate::allows('admin')&&$st==1))
        {
            $offer=offer::all();
            foreach($offer as $o)
            {
                $end=$o->end;
                date_default_timezone_set("Asia/Kathmandu");
                $dt=date("m/d/Y");
                $today=date_create($dt);
                $end_date=date_create($end); 
                $today_end_diff=date_diff($today,$end_date);
                    if($today_end_diff->format("%R%")==='-'||$today_end_diff->format("%R%a")==='+0')
                    {
                        p_off::where('name','=',$o->oname)->delete();
                        Storage::disk('public')->delete('/banner/'.$o->oimg);  
                        offer::where('oname','=',$o->oname)->delete();
                    }
            }
            $offer_new=offer::orderBy('pos')->get();
            $c=0;
            $oimg=array();
            foreach($offer_new as $o)
            {
                $start=$o->start;
                date_default_timezone_set("Asia/Kathmandu");
                $dt=date("m/d/Y");
                $today=date_create($dt);
                $start_date=date_create($start);
                $start_today_diff=date_diff($today,$start_date);
                if($start_today_diff->format("%R%")==='-'||$start_today_diff->format("%R%a")==='+0')
                {
                    $oimg[$c]=1;
                }
                else
                {
                    $oimg[$c]=0;
                }
                $c++;

            }
            $dloc=dloc::all();
            return view('/home',['off' => $offer_new,'oi'=>$oimg,'dl'=>$dloc]);
        }
        else
            return view('/locked');
    }   

    
}