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

use Illuminate\Support\Facades\Storage;


class editOfferController extends Controller
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
        abort(404, 'Not Found.');
        
    }

    public function show($q)
    {
        if (Gate::allows('admin')) 
            {
                
            $offer = offer::where('oname',$q)->get();
        
            return view('/editOffer',['off' => $offer]);

            }
        else
            abort(403, 'Unauthorized action.');
    }

    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            $oname=$request->get('oname');
            $o_details=offer::where('oname','=',$oname)->get(); 
            foreach($o_details as $od)
            {
                $cur_start=$od->start;
                $cur_end=$od->end;
                $cur_pos=$od->pos;
            }
            $start=$request->get('start'); 
            $end=$request->get('end');
            if($start!=$cur_start)
            { 
                date_default_timezone_set("Asia/Kathmandu");
                $dt=date("m/d/Y");
                $today=date_create($dt);
                $start_date=date_create($start);
                $start_today_diff=date_diff($today,$start_date);
                if($start_today_diff->format("%R%")==='-'||$start_today_diff->format("%R%a")==='+0')
                    return \Redirect::route('offer.index')        
                            ->with('oadd', 'Start date cannot be earlier than today!'); 
                $end_date=date_create($end);             
                $start_end_diff=date_diff($start_date,$end_date);
                if($start_end_diff->format("%R%")==='-'||$start_end_diff->format("%R%a")==='+0')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'End date should be later than start date!'); 
            }
            if($end!=$cur_end)
            {
                date_default_timezone_set("Asia/Kathmandu");
                $start_date=date_create($cur_start);
                $end_date=date_create($end);             
                $start_end_diff=date_diff($start_date,$end_date);
                if($start_end_diff->format("%R%")==='-'||$start_end_diff->format("%R%a")==='+0')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'End date should be later than start date!'); 
                $dt=date("m/d/Y");
                $today=date_create($dt);
                $today_end_diff=date_diff($today,$end_date);
                if($today_end_diff->format("%R%")==='-'||$today_end_diff->format("%R%a")==='+0')
                return \Redirect::route('offer.index')        
                        ->with('oadd', 'End date should be later than today!'); 
            }
            $pos=$request->get('pos');
            if($pos!=$cur_pos)
            {
                $cur_offer=offer::all();
                $cn=0;
                $c_pos=array();
                foreach($cur_offer as $coff)
                {
                    $c_pos[$cn]=$coff->pos;
                    $cn++;
                }
                for($j=0;$j<$cn;$j++)
                {
                    if($pos==$c_pos[$j])
                        return \Redirect::route('offer.index')        
                            ->with('oadd', 'Position already taken!');  
                }

            }
            offer::where('oname','=',$oname)->update(['start'=>$start,'end'=>$end,'pos'=>$pos]);      
            if($request->hasFile('oimg'))
            {
                $ol=offer::where('oname','=',$oname)->get();
                foreach($ol as $oi)
                {
                    $old=$oi->oimg;
                    Storage::disk('public')->delete('/banner/'.$old);
                }
                $oimg=$request->file('oimg'); 
                $pt=$oimg->store('/banner');
                $path=substr($pt, 7);
                offer::where('oname','=',$oname)->update(['oimg'=>$path]);
            }


            $p_off=$request->get('p_off'); 
            $cat=$request->get('category'); 
            $scat=$request->get('sub_category'); 

            $product=product::where('category','=',$cat)
                ->where('sub_category','=',$scat)
                ->get();
            $off =p_off::where('name','=',$oname)
                ->where('p_off','=',$p_off)
                ->get();
            $c=0;
            $id=array();
            foreach($product as $p)
            {
                $id[$c]=$p->ID;
                $c++;
            }
            $item_check=array();
            for($i=0;$i<$c;$i++)
            {
                $item_check[$i]=$request->get('item_'.$id[$i]);
            }
            foreach($off as $o)
            {
                foreach($product as $p)
                {
                    if($o->item_id==$p->ID)
                    {
                        p_off::where('name','=',$oname)
                            ->where('p_off','=',$p_off)
                            ->where('item_id','=',$p->ID)
                            ->delete();
                    }
                }
            }
            for($i=0;$i<$c;$i++)
            {   
                if($item_check[$i]!=NULL)
                {
                    $p_off_table=new p_off;
                    $p_off_table->name=$oname;
                    $p_off_table->p_off=$p_off;
                    $p_off_table->item_id=$item_check[$i];
                    $p_off_table->save();
                }
            }
            return \Redirect::route('offer.index')        
                        ->with('oadd', 'Offer "'.$oname.'" Editted!');    
        }
        else
            abort(403, 'Unauthorized action.');   
    }
    public function destroy($q)
    {
        if (Gate::allows('admin')) 
        {
            p_off::where('name','=',$q)->delete();
            $offer=offer::where('oname','=',$q)->get();
            foreach ($offer as $o)
            {
                Storage::disk('public')->delete('/banner/'.$o->oimg);  
            }
            offer::where('oname','=',$q)->delete();                
            return \Redirect::route('offer.index')->with('oadd', 'Offer '.'"'.$q.'"'.' Deleted!');
        }
        else
            abort(403, 'Unauthorized action.');
    }
    
    

  
}
