<?php

namespace App\Http\Controllers;
use App\product;

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


class productController extends Controller
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
        
            return view('/product');//,['invx' => $investor]);
            }
        else
            abort(403, 'Unauthorized action.');
    }

  

    
    public function store(Request $request)
    {
        if (Gate::allows('admin')) 
        {
            if(!$request->hasFile('images'))
                return \Redirect::route('product.index')        
                        ->with('padd', 'Please upload at least one image!');

            $id=$request->get('id'); 
            $title=$request->get('title'); 
            $price=$request->get('price'); 
            $category=$request->get('category'); 
            $sub_category=$request->get('sub_category'); 

            $images=$request->file('images'); 

            Validator::make($request->all(), [

                    'id' => 'unique:product',
                    ])->validate();  

            $product=new product;
            $product->id=$id;
            $product->title=$title;
            $product->price=$price;
            $product->category=$category;
            $product->sub_category=$sub_category;
            
            $product->save();
            
            

            if($request->hasFile('images'))
            {
                $i=0;
                foreach ($images as $file) 
                {
                    if($i==20)
                        break;
                    $p=$file->store('/product');

                    $path=substr($p, 8);


                    $destinationPath = public_path('/storage/product/low');
                    $img = Image::make($file->getRealPath());
                    $img->resize(300, 300, function ($constraint) {
                        $constraint->aspectRatio();
                    })->save($destinationPath.'/low_'.$path);
                    
                    for($j=0;$j<20;$j++)
                    {
                        if($i==$j)
                        {

                            product::where('ID','=',$id)->update(['i'.($j+1)=>$path]);
                            product::where('ID','=',$id)->update(['oos'.($j+1)=>0]);
                            break;
                        }
                    }
                    
                    $i++;
                    
                }
            }
           

            return \Redirect::route('product.index')        
                        ->with('padd', 'New Product "'.$id.'" Added!');
                    
                
        }
                     
            
        else
            abort(403, 'Unauthorized action.');
        
                
            
    }

    
  
}
