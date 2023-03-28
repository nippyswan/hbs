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


class shopDetailsController extends Controller
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
    
    public function index($home,$first,$last,$direction)
    {
        $pro=product::where('ID','=',$first)->get();
        foreach ($pro as $p) 
        {
            $cat=$p->category;
            $scat=$p->sub_category;   
        }
        
        $pro=product::where('category','=',$cat)
            ->where('sub_category','=',$scat)
            ->get();

        $c=0;
        $i=array();
        $eob='0';
        $eot='0';
        
        foreach($pro as $p)
        {
            
            $i[$c++]=$p->ID;          
            
        }

        if($direction=='none')
        {
            $f=0;
            foreach($pro as $p)
            {
                if($p->ID==$first)
                $first_pos=$f;
                $f++;
            }
            if($first_pos==0)
                $eot='1';
            $five=0;
         
            $item=array();
            $max=array();
            $new=array();
            for($j=$first_pos;$j<$f;$j++)
            {
                if($five>4)
                    break;
                $item[$five]=$i[$j];
                $p_off=p_off::where('item_id','=',$i[$j])->get();
                $max[$five]=0;
                foreach($p_off as $p)
                {
                    if($p->p_off>$max[$five])
                        $max[$five]=$p->p_off;
                }
                $price=product::where('ID','=',$i[$j])->get('price');
                foreach ($price as $p) 
                {
                    $old=$p->price;
                }
                $new[$five]=$old-($old*$max[$five]/100);
                $five++;
            }
            if($five==5)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3],$item[4]]);
                $last=$item[4];
                if($j==$f)
                    $eob='1';

            }
            elseif($five==4)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3]]);
                $last=$item[3];
                $eob='1';
            }
            elseif($five==3)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2]]);
                $last=$item[2];
                $eob='1';
            }
            elseif($five==2)
            {
                $final_pro=product::find([$item[0], $item[1]]);
                $last=$item[1];
                $eob='1';
            }
            else
            {
                $final_pro=product::find([$item[0]]);
                $last=$item[0];
                $eob='1';
            }
            
        

        }    
        
        if($direction=='down')  
        {

            $l=0;
            foreach($pro as $p)
            {
                if($p->ID==$last)
                    $last_pos=$l;
                if($p->ID==$first)
                    $first_pos=$l;
                $l++;
            }
            if($first_pos==0)
                $eot='1';

            $five=0;
         
            $item=array();
            $max=array();
            $new=array();
              
            for($j=$last_pos+1;$j<$l;$j++)
            {
                if($five>4)
                    break;
                $item[$five]=$i[$j];
                $p_off=p_off::where('item_id','=',$i[$j])->get();
                $max[$five]=0;
                foreach($p_off as $p)
                {
                    if($p->p_off>$max[$five])
                        $max[$five]=$p->p_off;
                }
                $price=product::where('ID','=',$i[$j])->get('price');
                foreach ($price as $p) 
                {
                    $old=$p->price;
                }
                $new[$five]=$old-($old*$max[$five]/100);
                $five++;

            }
            if($five==5)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3],$item[4]]);
                $last=$item[4];
                if($j==$l)
                    $eob='1';
            }
            elseif($five==4)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3]]);
                $last=$item[3];
                $eob='1';
            }
            elseif($five==3)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2]]);
                $last=$item[2];
                $eob='1';
            }
            elseif($five==2)
            {
                $final_pro=product::find([$item[0], $item[1]]);
                $last=$item[1];
                $eob='1';
            }
            else
            {
                $final_pro=product::find([$item[0]]);
                $last=$item[0];
                $eob='1';
            }

        }     

        if($direction=='up')  
        {

            $f=0;

            foreach($pro as $p)
            {
                if($p->ID==$first)
                    $first_pos=$f;
                if($p->ID==$last)
                    $last_pos=$f;
                $f++;
            }
            if($last_pos==($f-1))
                $eob='1';
          

            $five=0;
         
            $item=array();
            $max=array();
            $new=array();
            for($j=$first_pos-1;$j>-1;$j--)
            {
                if($five>4)
                    break;
                $five++;
            }  
            $new_five=$five-1;
            $five=0;
            for($j=$first_pos-1;$j>-1;$j--)
            {
                if($five>4)
                    break;
                $item[$five]=$i[$j];
                $p_off=p_off::where('item_id','=',$i[$j])->get();
                $max[$new_five]=0;
                foreach($p_off as $p)
                {
                    if($p->p_off>$max[$new_five])
                        $max[$new_five]=$p->p_off;
                }
                $price=product::where('ID','=',$i[$j])->get('price');
                foreach ($price as $p) 
                {
                    $old=$p->price;
                }
                $new[$new_five]=$old-($old*$max[$new_five]/100);
                $five++;
                $new_five--;

            }
            if($five==5)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3],$item[4]]);
                $first=$item[4];
                if($j==-1)
                    $eot='1';
            }
            elseif($five==4)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2],$item[3]]);
                $first=$item[3];
                $eot='1';
            }
            elseif($five==3)
            {
                $final_pro=product::find([$item[0], $item[1],$item[2]]);
                $first=$item[2];
                $eot='1';
            }
            elseif($five==2)
            {
                $final_pro=product::find([$item[0], $item[1]]);
                $first=$item[1];
                $eot='1';
            }
            else
            {
                $final_pro=product::find([$item[0]]);
                $first=$item[0];
                $eot='1';
            }

        }     
               

        return view('/shopDetails',['hm'=>$home,'firstID'=>$first,'lastID'=>$last,'arr'=>$final_pro,'eobchk'=>$eob,'eotchk'=>$eot,'sct'=>$scat,'dirn'=>$direction,'mx'=>$max,'nw'=>$new]);
    }
    
   
   

  
}
