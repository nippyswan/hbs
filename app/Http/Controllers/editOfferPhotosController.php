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


class editOfferPhotosController extends Controller
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
    public function index($cat,$scat,$p_off,$oname)
    {
        if (Gate::allows('admin')) 
        {
            $product=product::where('category','=',$cat)
                ->where('sub_category','=',$scat)
                ->get();
            $off =p_off::where('name','=',$oname)
                ->get();
            $c=0;
            $o_photos=array();
            $chk_status=array();
            $id=array();
            $match=0;
            foreach($product as $p)
            {
                $match=0;
                if($off!='[]')
                {
                    foreach($off as $o)
                    {
                        if($p->ID==$o->item_id)
                        {
                            if($p->oos1==0||$p->oos2==0||$p->oos3==0||$p->oos4==0||$p->oos5==0||$p->oos6==0||$p->oos7==0||$p->oos8==0||$p->oos9==0||$p->oos10==0||$p->oos11==0||$p->oos12==0||$p->oos13==0||$p->oos14==0||$p->oos15==0||$p->oos16==0||$p->oos17==0||$p->oos18==0||$p->oos19==0||$p->oos20==0)
                            {
                                if($o->p_off==$p_off)
                                {
                                    $chk_status[$c]=1;
                                    $o_photos[$c]=$p->i1;
                                    $id[$c]=$p->ID;
                                    $c++;
                                    $match=1;
                                    break;
                                }
                                else
                                {
                                    $match=1;
                                    break;   
                                }
                            }
                        }
                    }
                    if($match==0)
                    {
                        if($p->oos1==0||$p->oos2==0||$p->oos3==0||$p->oos4==0||$p->oos5==0||$p->oos6==0||$p->oos7==0||$p->oos8==0||$p->oos9==0||$p->oos10==0||$p->oos11==0||$p->oos12==0||$p->oos13==0||$p->oos14==0||$p->oos15==0||$p->oos16==0||$p->oos17==0||$p->oos18==0||$p->oos19==0||$p->oos20==0)
                        {
                            $chk_status[$c]=0;
                            $o_photos[$c]=$p->i1;
                            $id[$c]=$p->ID;
                            $c++;
                        }
                    }
                }
                else
                {
                    $chk_status[$c]=0;
                    $o_photos[$c]=$p->i1;
                    $id[$c]=$p->ID;
                    $c++;
                }
            }
            return view('/editOfferPhotos',['photos' => $o_photos,'chst'=>$chk_status,'item_id'=>$id,'count'=>$c]);

        }
        else
            abort(403, 'Unauthorized action.');
        
    }
}
