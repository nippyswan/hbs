@extends('layouts.app')
@section('content')
<script>
function cnf(){var cnf=confirm("Confirm Action?");if(cnf==true)return true;else return false;}
function myFunction(q) 
{
    document.getElementById("bar").style.display = "none";
    document.getElementById("tab-page").style.display = "none";
    document.getElementById("myF").innerHTML='<div class="container" style="margin-bottom:5px;" id="top"><div class="row justify-content-center"><div class="col-md-8 col-12"><div class="card"><div class="card-header" style="padding-bottom:10px;"><a><img src="/png/back.png" height="30" width="30" style="margin-right:20px;padding-bottom:5px;"></a><img src="/png/cat_sk.png" height="30"></div></div></div></div></div><div class="container justify-content-between" style="border-bottom-style:solid;border-color:#444;border-width:1px;"><ul class="nav nav-justified pb-3 pt-2"><li class="nav-item"><a class="nav-link"><img src="/png/ear.png" width="25" height="25" alt="" style="margin-top:5px;"></a></li><li class="nav-item"><a class="nav-link"><img src="/png/neck.png" width="25" height="25"style="margin-top:5px;"></a></li><li class="nav-item"><a class="nav-link"><img src="/png/bang.png" width="30" height="30" style="margin-top:5px;"></a></li><li class="nav-item"><a class="nav-link"><img src="/png/ring.png" width="25" height="25" alt="" style="margin-top:5px;"></a></li><li class="nav-item"><a class="nav-link"><img src="/png/none.png" width="25" height="25" alt="" style="margin-top:5px;"></a></li></ul></div><div class="container" ><div class="row justify-content-start mt-2"><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div><div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;"><a><img class="catimg" src="/png/low_sk.png"></a></div></div></div>';
        document.getElementById("myF").style.display="block";
        $(document).ready(function(){document.getElementById('top').scrollIntoView();}); 
    const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("myF").innerHTML = this.responseText;    
    }
    xhttp.open("GET", "/shop/"+q,true);
    xhttp.send();
}
function closedetails()
{
    var hm = document.getElementById("hm");
    var h = hm.textContent;   
    var hmm=h.replace(/\s/g,'');
    document.getElementById('details').innerHTML='';
    document.getElementById("details_parent").style.display = "none";
    document.getElementById("myF").style.display="block";    
    $(document).ready(function(){document.getElementById('small'+hmm).scrollIntoView(false);});  
}
function closeshop(id)
{
    document.getElementById("myF").style.display="none";
    document.getElementById("bar").style.display = "block";
    document.getElementById("tab-page").style.display = "block";
    $(document).ready(function(){document.getElementById(id).scrollIntoView();});
}
$(document).ready(function(){
    $(window).scroll(function(){   
    //bottom scroll
        if($(window).scrollTop()==$(document).height()-$(window).height())
        { 
            var firstexist = !!document.getElementById("first");
            if(firstexist==true)
            {
            var hm = document.getElementById("hm");
            var h = hm.textContent;   
            var hmm=h.replace(/\s/g,'');
            var first = document.getElementById("first");
            var f = first.textContent;   
            var fid=f.replace(/\s/g,'');
            var last = document.getElementById("last");
            var l = last.textContent;   
            var lid=l.replace(/\s/g,'');
            var eobb = document.getElementById("eob");
            var eobc = eobb.textContent;   
            var eob=eobc.replace(/\s/g,'');  
            if(eob=='0')
            {
            const xhttpmore = new XMLHttpRequest();
            xhttpmore.onload = function() 
            {
                if(eob=='0')
                {
                    var det1=document.getElementById('details');
                    var newDiv1=document.createElement('div');
                    det1.appendChild(newDiv1);
                    document.getElementById('first').remove();
                    document.getElementById('last').remove();
                    document.getElementById('eob').remove();
                    document.getElementById('eot').remove();
                    newDiv1.innerHTML = this.responseText;
                } 
            }
            xhttpmore.open("GET", "/shopDetails/"+hmm+"/"+fid+"/"+lid+"/"+'down',true);
            xhttpmore.send();  
            }
            }    
        }
        //top scroll
        if ($(window).scrollTop() == 0) 
        {   
            var firstexist = !!document.getElementById("first");
            if(firstexist==true)
            {
            var hm1 = document.getElementById("hm");
            var h1 = hm1.textContent;   
            var hmm1=h1.replace(/\s/g,'');
            var first1 = document.getElementById("first");
            var f1 = first1.textContent;   
            var fid1=f1.replace(/\s/g,'');
            var last1 = document.getElementById("last");
            var l1 = last1.textContent;   
            var lid1=l1.replace(/\s/g,'');
            var eotb = document.getElementById("eot");
            var eotc = eotb.textContent;   
            var eot=eotc.replace(/\s/g,''); 
            if(eot=='0')
            {           
            const xhttpmore = new XMLHttpRequest();
            xhttpmore.onload = function() 
            {
                if(eot=='0')
                {   
                    document.getElementById('first').remove();
                    document.getElementById('last').remove();
                    document.getElementById('eob').remove();
                    document.getElementById('eot').remove();
                    var det11=document.getElementById('details');
                    var newDiv11=document.createElement('div');
                    det11.insertBefore(newDiv11, det11.childNodes[0]);
                    newDiv11.innerHTML = this.responseText;
                    $(document).ready(function(){document.getElementById('id'+fid1).scrollIntoView(false);});                          
                } 
            }
            xhttpmore.open("GET", "/shopDetails/"+hmm1+"/"+fid1+"/"+lid1+"/"+'up',true);
            xhttpmore.send();
            }
            }
        } 
    });
});
function details(q) 
{ 
    document.getElementById("myF").style.display = "none"; 
    document.getElementById("details_parent").style.display="block";
    var det=document.getElementById('details');
    var newDiv=document.createElement('div');
    det.appendChild(newDiv);      
    newDiv.innerHTML='<div class="container"><div class="row justify-content-center"><div class="col-md-6 col-12"><img src="/png/det_sk.png" class="d-block w-100"></div></div><div class="row justify-content-center"><div class="col-md-1 col-2"><h4 class="pl-3 pt-3 pb-1"><b>Rs.</b></h4></div><div class="col-md-5 col-10 pt-3 pb-1"><img src="/png/price_sk.png" height="20"></div></div><div class="row justify-content-center"><div class="col-md-6 col-12"><h6 class="pl-3 pb-3" style="border-bottom-style:solid;border-color:#444;border-width:2px;"><b><img src="/png/cat_sk.png" height="10"></b></h6></div></div></div><div class="container"><div class="row justify-content-center"><div class="col-md-6 col-12"><img src="/png/det_sk.png" class="d-block w-100"></div></div><div class="row justify-content-center"><div class="col-md-1 col-2"><h4 class="pl-3 pt-3 pb-1"><b>Rs.</b></h4></div><div class="col-md-5 col-10 pt-3 pb-1"><img src="/png/price_sk.png" height="20"></div></div><div class="row justify-content-center"><div class="col-md-6 col-12"><h6 class="pl-3 pb-3" style="border-bottom-style:solid;border-color:#444;border-width:2px;"><b><img src="/png/cat_sk.png" height="10"></b></h6></div></div></div>'; 
    const xhttpdetails = new XMLHttpRequest();
    xhttpdetails.onload = function() 
    {
        newDiv.innerHTML = this.responseText;   
    }
    xhttpdetails.open("GET", "/shopDetails/"+q+"/"+q+"/"+'null'+"/"+'none',true);
    xhttpdetails.send();
}
function showLow(q) 
{ 
    var par=document.getElementById('showLow');
    if(par.innerHTML=="")
    {
        par.innerHTML='<div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div><div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;"><a><img class="shopimg" src="/jpg/showLow.jpg" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;"></a></div>'; 
        const xhttpdetails = new XMLHttpRequest();
        xhttpdetails.onload = function() 
        {
            par.innerHTML = this.responseText;   
        }
        xhttpdetails.open("GET", "/custReviewShowLow/"+q,true);
        xhttpdetails.send();
    }
}
function crHigh(q) 
{ 
    document.getElementById("bar").style.display = "none";
    document.getElementById("tab-page").style.display = "none";
    var par=document.getElementById('crHigh');
    par.style.display="block";
    par.innerHTML='<div class="container"><div class="row justify-content-center"><div class="col-12 col-md-8" style="position:relative;"><img src="/jpg/showLow.jpg" style="width:100%;"><a style="position:absolute;top:5%;right:10%;cursor:pointer;"><img src="/png/close.png" height="50"></a></div></div></div>'; 
    const xhttpdetails = new XMLHttpRequest();
    xhttpdetails.onload = function() 
    {
        par.innerHTML = this.responseText;   
    }
    xhttpdetails.open("GET", "/custReviewShow/"+q,true);
    xhttpdetails.send();
}
function closeCrHigh(id)
{
    document.getElementById('crHigh').style.display = "none";
    document.getElementById("bar").style.display = "block";
    document.getElementById("tab-page").style.display = "block";
    $(document).ready(function(){document.getElementById(id).scrollIntoView(false);});
}
</script>
</script>
@if(Session::has('pedit')) <div class="alert alert-success"> {{Session::get('pedit')}} </div> @endif
@if(Session::has('pdel')) <div class="alert alert-success"> {{Session::get('pdel')}} </div> @endif
@auth
<div class="d-flex align-items-center sticky-top justify-content-end mb-2 mt-0 mr-5" style="height:30px;background-color:#000;">
    <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;">
        {{ucfirst(Auth::user()->username)}}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;">
        <a class="dropdown-item" style="color:#fff;" href="/product">Add Product</a>
        <a class="dropdown-item" style="color:#fff;" href="/dloc">Add Location</a>
        <a class="dropdown-item" style="color:#fff;" href="/custReview">Add Review</a>
        <a class="dropdown-item" href="/offer" style="color:#fff;border-bottom-style:solid;border-width:1px;border-color:#444;">Add Offer</a>
        <a class="dropdown-item" href="/home" style="color:#fff;border-bottom-style:solid;border-width:1px;border-color:#444;">Home</a>    
        <a class="dropdown-item" style="color:white;" href="{{route('logout')}}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
          Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display:none;">
            @csrf
        </form>
      </div>
    </div>                  
</div>
@endauth
<div id="details_parent" style="display:none;margin-bottom:10px;"> 
    <div class="container sticky-top" style="z-index:10;background-color: #000;">
        <div class="row justify-content-center" style="z-index:10;background-color: #000;">
            <div class="col-md-8 col-12" style="z-index:10;background-color: #000;">
                <div class="card" style="z-index:10;background-color: #000;">
                    <div class="card-header" style="padding-bottom:10px;z-index:10;background-color: #000;">
                        <a onclick="closedetails()" >
                            <img src="/png/back.png" height="30" width="30" style="z-index:10;background-color: #000;cursor:pointer;margin-right:20px;padding-bottom:5px;"> 
                        </a>                 
                    </div>
                </div>
            </div>
        </div>        
    </div>  
    <div id="details">
    </div> 
</div>
<div id="myF" style="display:none;">
</div>
<div id="crHigh" style="display:none;">
</div>
<div class="tab-content mt-2" id="tab-page" >
     <div class="tab-pane fade show active" id="hm" role="tabpanel" aria-labelledby="hm-tab">
        <div class="container" style="margin-bottom:100px;">
            <form method="GET" action="/search">
                @csrf
                <div class="form-group row justify-content-center mt-3 mb-2"  > 
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-4 col-10" style="border-bottom-style:solid;border-width:1px;border-color:#444;">
                        <input id="search" type="text" class="form-control mt-2 mb-2" name="search" placeholder="Search Product By Code">
                    </div>
                    <div class="col-md-4 col-2" style="border-bottom-style:solid;border-width:1px;border-color:#444;">
                    </div>
                    <div class="col-md-2">
                    </div>
                </div>
            </form>   
            @php $c=0; @endphp
            @foreach($off as $o)
            @if($oi[$c]==1)
            <div class="row justify-content-center"  > 
                <div class="col-12 col-md-8" style="border-bottom-style:solid;border-width:1px;border-color:#444;">
                    <img src="/storage/banner/{{$o->oimg}}" class="mb-2" style="width:100%;">
                </div>       
            </div>
            @endif
            @php $c++; @endphp
            @endforeach
            <div class="row justify-content-center"  > 
                <div class="col-12 col-md-8 mb-2" style="text-align:center;color:#ccc; ">
                    <!--<button class="btn btn-dark mt-2 mb-2" id="buttonInstall" onclick="pwains()">Install Our App</button>-->
                    <b>Install Our App</b>
                </div>
            </div>
            <div class="row justify-content-center"  > 
                <div class="col-12 col-md-4 mb-2" style="color:#eee;font-size:12px;border-bottom-style:solid;border-width:1px;border-color:#444;">
                    <!--<button class="btn btn-dark mt-2 mb-2" id="buttonInstall" onclick="pwains()">Install Our App</button>-->
                    <u><b>Chrome Android</b></u><br>
                    1. Click <img src="/jpg/c1.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    2. Click <img src="/jpg/c2.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    3. Click <img src="/jpg/c3.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    4. Open our App from homescreen: <img src="/jpg/c4.jpg" class="mb-2" height="60" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                </div>
                <div class="col-12 col-md-4 mb-2" style="color:#eee;font-size:12px;border-bottom-style:solid;border-width:1px;border-color:#444;">
                    <!--<button class="btn btn-dark mt-2 mb-2" id="buttonInstall" onclick="pwains()">Install Our App</button>-->
                    <u><b>Safari iOS</b></u><br>
                    1. Click <img src="/jpg/i1.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    2. Click <img src="/jpg/i2.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    3. Click <img src="/jpg/i3.jpg" class="mb-1" height="25" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                    4. Open our App from homescreen: <img src="/jpg/i4.jpg" class="mb-2" height="60" style="border-style:solid;border-width:1px;border-color:#777;"><br>
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-12 col-md-8 mb-2" style="text-align:center;color:#ccc; ">
                    <b>Connect With Us</b>
                </div>
            </div>
            <div class="row justify-content-center"> 
                <div class="col-3 col-md-2" style="text-align:center;border-bottom-style:solid;border-width:1px;border-color:#444; ">
                    <a href="https://www.facebook.com/handpicked.by.swan" target=”_blank”><img src="/png/fb.png" class="mb-2" height="30" width="30"></a>
                </div>
                <div class="col-3 col-md-2" style="text-align:center;border-bottom-style:solid;border-width:1px;border-color:#444; ">
                    <a href="https://www.instagram.com/handpicked.by.swan" target=”_blank”><img src="/png/insta.png" class="mb-2" height="30" width="30"></a>
                </div>
                <div class="col-3 col-md-2" style="text-align:center;border-bottom-style:solid;border-width:1px;border-color:#444; ">
                    <a href="https://wa.me/9779824318970" target=”_blank”><img src="/png/wa.png" class="mb-2" height="30" width="30"></a>
                </div>
                <div class="col-3 col-md-2" style="text-align:center;border-bottom-style:solid;border-width:1px;border-color:#444; ">
                    <a href="https://www.tiktok.com/@handpickedbyswan" target=”_blank”><img src="/png/tk.png" class="mb-2" height="30" width="30"></a>
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-12 col-md-8 mb-2" style="text-align:center;color:#ccc;">
                    <b>Our Store</b>
                </div>
            </div>
            <div class="row justify-content-center"> 
                <div class="col-12 col-md-8 mb-2" style="text-align:center;font-size: 12px; ">
                    Handpicked By Swan<br>
                    Cinema Hall Line<br>
                    Belbari-1<br>
                    Morang<br>
                    Nepal<br>
                    Phone: +977 9824318970<br>
                    PAN No.: 614178535
                    
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab" style="margin-bottom:80px;">
        <div class="container" >
            <div class="row justify-content-center" id="crhd" >                   
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style=" border-bottom-style:solid;border-color:#444;border-width:1px;">
                    <h2 style="text-align:center;padding:10px;">
                    Customer Reviews
                    </h2>
                </div>
            </div>
            <div class="row justify-content-start mt-2" id="showLow"></div>
        </div>
    </div>
    <div class="tab-pane fade" id="deloc" role="tabpanel" aria-labelledby="deloc-tab">
        <div class="container" style="margin-bottom: 80px;">
            <div class="row justify-content-center" >                   
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8 mb-2" style=" border-bottom-style:solid;border-color:#444;border-width:1px;">
                    <h2 style="text-align:center;padding:10px;">
                    Delivery Locations
                    </h2>
                </div>
            </div>
            @foreach($dl as $d)
            <div class="row justify-content-center">
                <div class="col-12 col-md-8" style="position:relative;">
                    <img class="shopimg mb-2" src="/storage/dloc/{{$d->img}}" style="border-radius:0px;">
                    @auth
                    <a class="btn btn-dark" href="/dloc/delete/{{$d->id}}" onclick="return cnf()" style="position:absolute;top:5%;right:10%;">Delete</a>
                    @endauth
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="tab-pane fade" id="shop" role="tabpanel" aria-labelledby="shop-tab" style="margin-bottom:80px;">
        <div class="container" >
            <div class="row justify-content-center" >                   
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 col-xl-8" style=" border-bottom-style:solid;border-color:#444;border-width:1px;">
                    <h2 style="text-align:center;padding:10px;">
                    Our Collection
                    </h2>
                </div>
            </div>
            <div class="row justify-content-start mt-2">
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="ox">
                    <a onclick="myFunction('ox')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/ox-menu.jpg" alt="Oxidized jewelry">
                        <div class="shoptxt">
                        Oxidized
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="ad">
                    <a onclick="myFunction('ad')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/ad-menu.jpg" alt="American Diamond jewelry">
                        <div class="shoptxt">
                         American Diamond
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="pk">
                    <a onclick="myFunction('pk')"style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/pk-menu.jpg" alt="polki kundan jewelry">
                        <div class="shoptxt">
                         Polki & Kundan
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="mk">
                    <a onclick="myFunction('mk')"  style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/mk-menu.jpg" alt="Meenakari jewelry">
                        <div class="shoptxt">
                         Meenakari
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="itr">
                    <a onclick="myFunction('itr')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/itr-menu.jpg" alt="indian Traditional jewelry">
                        <div class="shoptxt">
                         Indian Traditional
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="ntr">
                    <a onclick="myFunction('ntr')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/ntr-menu.jpg" alt="nepali Traditional jewelry">
                        <div class="shoptxt">
                         Nepali Traditional 
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="md">
                    <a onclick="myFunction('md')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/md-menu.jpg" alt="modern korean jewelry">
                        <div class="shoptxt">
                         Modern
                        </div>
                    </a>
                </div>
                <div class="col-6 col-sm-4 col-md-4 col-lg-4 col-xl-4 p-2" style="position:relative;" id="br">
                    <a onclick="myFunction('br')" style="cursor:pointer;">
                        <img class="shopimg" src="/jpg/br-menu.jpg" alt="bridal set jewelry">
                        <div class="shoptxt">
                         Bridal
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container fixed-bottom justify-content-center" id="bar" style="border-top-style:solid;border-color:#444;border-width:1px;background-color:#000;">    
    <ul class="nav nav-justified pb-3 pt-2" id="pills-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="hm-tab" data-toggle="pill" href="#hm" role="tab" aria-controls="hm" aria-selected="true">
            <img src="/png/logo.png" width="30" height="30" alt="handpicked by swan logo">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" onclick="showLow()" id="reviews-tab" data-toggle="pill" href="#reviews" role="tab" aria-controls="reviews" aria-selected="false">
            <img src="/png/reviews.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="deloc-tab" data-toggle="pill" href="#deloc" role="tab" aria-controls="deloc" aria-selected="false">
            <img src="/png/deloc.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="shop-tab" data-toggle="pill" href="#shop" role="tab" aria-controls="shop" aria-selected="false">
            <img src="/png/shop.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
    </ul>      
</div>                  
@endsection