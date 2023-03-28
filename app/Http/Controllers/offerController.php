<?php

namespace App\Http\Controllers;
use App\product;
use App\offer;
use App\p_off;
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
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class offerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
       
            //$investor = product::where('status',1)->get();
        
            return view('/offer');//,['invx' => $investor]);
            }
        else
            abort(403, 'Unauthorized action.');
    }

    public function show()
    {
        if (Gate::allows('admin')) 
            {
                
            $offer = offer::orderBy('pos')->get();
            if($offer=='[]')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'No Offers to show!'); 
        
            return view('/showOffer',['off' => $offer]);
            //return view('/editProductForm');//,['pr' => $product]);
            }
        else
            abort(403, 'Unauthorized action.');
    }

    
    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            $start=$request->get('start'); 
            $end=$request->get('end'); 
            date_default_timezone_set("Asia/Kathmandu");
            $dt=date("m/d/Y");
            $today=date_create($dt);
            $start_date=date_create($start);
            $end_date=date_create($end);                
            $start_today_diff=date_diff($today,$start_date);
            if($start_today_diff->format("%R%")==='-'||$start_today_diff->format("%R%a")==='+0')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'Start date should be later than today!'); 
            $start_end_diff=date_diff($start_date,$end_date);
                if($start_end_diff->format("%R%")==='-'||$start_end_diff->format("%R%a")==='+0')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'End date should be later than start date!'); 
            $cur_offer=offer::all();
            $c=0;
            foreach($cur_offer as $coff)
            {
                $c_pos[$c]=$coff->pos;
                $c++;
            }
            if($c>=5)
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'New Offer Cannot be added! Maximum no. of Offers is 5!'); 
            $oname=$request->get('oname'); 
            $pos=$request->get('pos'); 
            $oimg=$request->file('oimg'); 
            Validator::make($request->all(), [
                    'oname' => 'unique:offer',
                    ])->validate();  
            for($j=0;$j<$c;$j++)
            {
                if($pos==$c_pos[$j])
                    return \Redirect::route('offer.index')        
                        ->with('oadd', 'Position already taken!');  
            }
            $offer=new offer;
            $offer->oname=$oname;
            $offer->start=$start;
            $offer->end=$end;
            $offer->pos=$pos;           
            if($request->hasFile('oimg'))
           {
                $p=$oimg->store('/banner');
                $path=substr($p, 7);
                $offer->oimg=$path; 
            }
            $offer->save();
            return \Redirect::route('offer.index')        
                        ->with('oadd', 'New Offer "'.$oname.'" Added!');                         
        }  
        else
            abort(403, 'Unauthorized action.');     
    }
}
