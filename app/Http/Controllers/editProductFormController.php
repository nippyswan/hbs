<?php

namespace App\Http\Controllers;
use App\product;
use Image;
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


class editProductFormController extends Controller
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
                
            $product = product::where('id',$q)->get();
        
            return view('/editProductForm',['pr' => $product]);
            //return view('/editProductForm');//,['pr' => $product]);
            }
        else
            abort(403, 'Unauthorized action.');
    }

    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
        
            $id=$request->get('idv'); 
            $title=$request->get('title'); 
            $price=$request->get('price'); 
            $category=$request->get('category'); 
            $sub_category=$request->get('sub_category'); 
            $images=$request->file('images');  
            $pro=product::where('ID','=',$id)->get();
            foreach ($pro as $p)
            {
                $i[0]=$p->i1;
                $i[1]=$p->i2;
                $i[2]=$p->i3;
                $i[3]=$p->i4;
                $i[4]=$p->i5;
                $i[5]=$p->i6;
                $i[6]=$p->i7;
                $i[7]=$p->i8;
                $i[8]=$p->i9;
                $i[9]=$p->i10;
                $i[10]=$p->i11;
                $i[11]=$p->i12;
                $i[12]=$p->i13;
                $i[13]=$p->i14;
                $i[14]=$p->i15;
                $i[15]=$p->i16;
                $i[16]=$p->i17;
                $i[17]=$p->i18;
                $i[18]=$p->i19;
                $i[19]=$p->i20;
            }

            $chk=0;
            $c=0;
            for($j=0;$j<20;$j++)
            {
                if($i[$j]!==NULL)
                {
                    $c++;//count total current images 
                    $f=$request->get('i'.($j+1));
                    if($f=='dlt')
                    {
                        $chk++;//count no. of images to delete
                    }
                }
            }
            //return error if all images are to be deleted        
            if($chk==$c)
                return \Redirect::route('home.index')        
                        ->with('pedit', 'Cannot delete all Images! Keep at least 1!');
            //delete images
            for ($j = 0; $j <20; $j++)
            {
                if($i[$j]!==NULL)
                {
                    $f=$request->get('i'.($j+1));
                    if($f=='dlt')
                    {
                        $url=$i[$j];
                        Storage::disk('public')->delete('/product/'.$url);//delete high image 
                        Storage::disk('public')->delete('/product/low/low_'.$url);//delete low image
                        product::where('ID','=',$id)->update(['i'.($j+1)=>NULL]);//delete DB record
                        product::where('ID','=',$id)->update(['oos'.($j+1)=>NULL]);//delete oos record
                    }
                    if($f=='oos')//update oos record
                    {
                        product::where('ID','=',$id)->update(['oos'.($j+1)=>1]);//update oos record
                    }
                }
            }
            
            //save other records
            product::where('ID','=',$id)->update(['title'=>$title,'price'=>$price,'category'=>$category,'sub_category'=>$sub_category]); 
            //save new uploaded images
            if($request->hasFile('images'))
            {
                $cnn=20-$c;//empty space before deletion
                $cn=1;//count new image
                foreach ($images as $file) 
                {
                    if($cn>$cnn)//new image should not exceed empty space
                        break;
                    $p=$file->store('/product');//get image and save
                    $path=substr($p, 8);
                    $destinationPath = public_path('/storage/product/low');
                    $img = Image::make($file->getRealPath());
                    $img->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/low_'.$path);
                    //save to DB
                    for($j=0;$j<20;$j++)
                    {
                        if($i[$j]==NULL)
                        {
                            $l=$j+1;
                            product::where('ID','=',$id)->update(['i'.($l)=>$path]);
                            product::where('ID','=',$id)->update(['oos'.($l)=>0]);//update oos record
                            $pro=product::where('ID','=',$id)->get();//update $pro 
                            foreach ($pro as $p)
                            {
                                $i[0]=$p->i1;
                                $i[1]=$p->i2;
                                $i[2]=$p->i3;
                                $i[3]=$p->i4;
                                $i[4]=$p->i5;
                                $i[5]=$p->i6;
                                $i[6]=$p->i7;
                                $i[7]=$p->i8;
                                $i[8]=$p->i9;
                                $i[9]=$p->i10;
                                $i[10]=$p->i11;
                                $i[11]=$p->i12;
                                $i[12]=$p->i13;
                                $i[13]=$p->i14;
                                $i[14]=$p->i15;
                                $i[15]=$p->i16;
                                $i[16]=$p->i17;
                                $i[17]=$p->i18;
                                $i[18]=$p->i19;
                                $i[19]=$p->i20;
                            }
                            break;
                        }
                    }
                    $cn++;
                }
            }
            //get latest DB record
            $pro=product::where('ID','=',$id)->get();
            foreach ($pro as $p)
            {
                $i[0]=$p->i1;
                $i[1]=$p->i2;
                $i[2]=$p->i3;
                $i[3]=$p->i4;
                $i[4]=$p->i5;
                $i[5]=$p->i6;
                $i[6]=$p->i7;
                $i[7]=$p->i8;
                $i[8]=$p->i9;
                $i[9]=$p->i10;
                $i[10]=$p->i11;
                $i[11]=$p->i12;
                $i[12]=$p->i13;
                $i[13]=$p->i14;
                $i[14]=$p->i15;
                $i[15]=$p->i16;
                $i[16]=$p->i17;
                $i[17]=$p->i18;
                $i[18]=$p->i19;
                $i[19]=$p->i20;

                $oos[0]=$p->oos1;
                $oos[1]=$p->oos2;
                $oos[2]=$p->oos3;
                $oos[3]=$p->oos4;
                $oos[4]=$p->oos5;
                $oos[5]=$p->oos6;
                $oos[6]=$p->oos7;
                $oos[7]=$p->oos8;
                $oos[8]=$p->oos9;
                $oos[9]=$p->oos10;
                $oos[10]=$p->oos11;
                $oos[11]=$p->oos12;
                $oos[12]=$p->oos13;
                $oos[13]=$p->oos14;
                $oos[14]=$p->oos15;
                $oos[15]=$p->oos16;
                $oos[16]=$p->oos17;
                $oos[17]=$p->oos18;
                $oos[18]=$p->oos19;
                $oos[19]=$p->oos20;
            }
            //sort DB record serially from i1           
            for($j=0;$j<20;$j++)
            {
                if($i[$j]==NULL)
                {
                    for($k=$j+1;$k<20;$k++)
                    {
                        if($i[$k]!==NULL)
                        {
                            $l=$j+1;
                            $m=$k+1;
                            product::where('ID','=',$id)->update(['i'.($l)=>$i[$k]]);//swap
                            product::where('ID','=',$id)->update(['oos'.($l)=>$oos[$k]]);//swap oos
                            product::where('ID','=',$id)->update(['i'.($m)=>NULL]);//nullify after swap
                            product::where('ID','=',$id)->update(['oos'.($m)=>NULL]);//nullify after swap oos
                            $pro=product::where('ID','=',$id)->get();//update after swap
                            foreach ($pro as $p)
                            {
                                $i[0]=$p->i1;
                                $i[1]=$p->i2;
                                $i[2]=$p->i3;
                                $i[3]=$p->i4;
                                $i[4]=$p->i5;
                                $i[5]=$p->i6;
                                $i[6]=$p->i7;
                                $i[7]=$p->i8;
                                $i[8]=$p->i9;
                                $i[9]=$p->i10;
                                $i[10]=$p->i11;
                                $i[11]=$p->i12;
                                $i[12]=$p->i13;
                                $i[13]=$p->i14;
                                $i[14]=$p->i15;
                                $i[15]=$p->i16;
                                $i[16]=$p->i17;
                                $i[17]=$p->i18;
                                $i[18]=$p->i19;
                                $i[19]=$p->i20;
                                
                                $oos[0]=$p->oos1;
                                $oos[1]=$p->oos2;
                                $oos[2]=$p->oos3;
                                $oos[3]=$p->oos4;
                                $oos[4]=$p->oos5;
                                $oos[5]=$p->oos6;
                                $oos[6]=$p->oos7;
                                $oos[7]=$p->oos8;
                                $oos[8]=$p->oos9;
                                $oos[9]=$p->oos10;
                                $oos[10]=$p->oos11;
                                $oos[11]=$p->oos12;
                                $oos[12]=$p->oos13;
                                $oos[13]=$p->oos14;
                                $oos[14]=$p->oos15;
                                $oos[15]=$p->oos16;
                                $oos[16]=$p->oos17;
                                $oos[17]=$p->oos18;
                                $oos[18]=$p->oos19;
                                $oos[19]=$p->oos20;
                            }
                            break;
                        }
                    }                    
                }
            }
            return \Redirect::route('home.index')        
                        ->with('pedit', 'Product "'.$id.'" Editted!');   
        }
        else
            abort(403, 'Unauthorized action.');   
    }
    public function destroy($q)
    {
        if (Gate::allows('admin')) 
        {
            $p_off=p_off::where('item_id','=',$q)->get();
            if($p_off!='[]')
                return \Redirect::route('home.index')        
                        ->with('pedit', 'Product "'.$q.'" has at least one active Offer! Please delete the offer or remove offer from the product to delete this product!');   
            $img=product::where('ID','=',$q)->get();
            foreach ($img as $p)
            {
                $i[0]=$p->i1;
                $i[1]=$p->i2;
                $i[2]=$p->i3;
                $i[3]=$p->i4;
                $i[4]=$p->i5;
                $i[5]=$p->i6;
                $i[6]=$p->i7;
                $i[7]=$p->i8;
                $i[8]=$p->i9;
                $i[9]=$p->i10;
                $i[10]=$p->i11;
                $i[11]=$p->i12;
                $i[12]=$p->i13;
                $i[13]=$p->i14;
                $i[14]=$p->i15;
                $i[15]=$p->i16;
                $i[16]=$p->i17;
                $i[17]=$p->i18;
                $i[18]=$p->i19;
                $i[19]=$p->i20;
            }

            for($j=0;$j<20;$j++)
            {
                if($i[$j]!==NULL)
                {
                    $url=$i[$j];
                    Storage::disk('public')->delete('/product/'.$url);
                    Storage::disk('public')->delete('/product/low/low_'.$url);
                }
            }
            product::where('ID','=',$q)->delete();

            
        
            return \Redirect::route('home.index')        
                        ->with('pdel', 'Product '.'"'.$q.'"'.' Deleted!');
        }
        else
            abort(403, 'Unauthorized action.');
    }
    
    

  
}
