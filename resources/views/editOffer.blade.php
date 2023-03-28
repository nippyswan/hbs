@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">
function checkall()
{
    var s=document.getElementById('selectall');
    var checkboxes=document.getElementsByClassName('selectall');
    for(i=0;i<checkboxes.length;i++)
    {
        if(s.checked==true)
        checkboxes[i].checked=true;
        if(s.checked==false)
        checkboxes[i].checked=false;
    }
}
function cnf(){var cnf=confirm("Confirm Action?");if(cnf==true)return true;else return false;}
	$( function() {
	    $( "#start" ).datepicker();
	    $( "#end" ).datepicker();
	} );
$(document).ready(function()
	{
	var cat=document.getElementById('category').value;
	var scat=document.getElementById('sub_category').value;
	var p_off=document.getElementById('p_off').value;
	var oname=document.getElementById('oname').value;
	const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("o_photos").innerHTML = this.responseText;
        document.getElementById("o_photos").style.display="block";
    }
    xhttp.open("GET", "/editOfferPhotos/"+cat+"/"+scat+"/"+p_off+"/"+oname,true);
    xhttp.send();	
	});
function changeP_off()
{
	var cat=document.getElementById('category').value;
	var scat=document.getElementById('sub_category').value;
	var p_off=document.getElementById('p_off').value;
	var oname=document.getElementById('oname').value;
	const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("o_photos").innerHTML = this.responseText;
        document.getElementById("o_photos").style.display="block";
    }
    xhttp.open("GET", "/editOfferPhotos/"+cat+"/"+scat+"/"+p_off+"/"+oname,true);
    xhttp.send();	
}
function changeCat(){
	var cat=document.getElementById('category').value;
	var scat=document.getElementById('sub_category').value;
	var p_off=document.getElementById('p_off').value;
	var oname=document.getElementById('oname').value;
	const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("o_photos").innerHTML = this.responseText;
        document.getElementById("o_photos").style.display="block";
    }
    xhttp.open("GET", "/editOfferPhotos/"+cat+"/"+scat+"/"+p_off+"/"+oname,true);
    xhttp.send();
}
function changeScat(){
	var cat=document.getElementById('category').value;
	var scat=document.getElementById('sub_category').value;
	var p_off=document.getElementById('p_off').value;
	var oname=document.getElementById('oname').value;
	const xhttp = new XMLHttpRequest();
    xhttp.onload = function() 
    {
        document.getElementById("o_photos").innerHTML = this.responseText;
        document.getElementById("o_photos").style.display="block";
    }
    xhttp.open("GET", "/editOfferPhotos/"+cat+"/"+scat+"/"+p_off+"/"+oname,true);
    xhttp.send();
}
</script>
<?php
foreach($off as $offer)
{
	$oname=$offer->oname;
	$start=$offer->start;
	$end=$offer->end;
	$oimg=$offer->oimg;
	$pos=$offer->pos;
}
?>
@if(Session::has('oadd'))<div class="alert alert-success">{{Session::get('oadd')}}</div>@endif
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
<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Offer </div>
                <div class="card-body">
                    <form method="POST" action="/editOffer" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="base64" name="base64"> 
                        <div class="form-group row">
                            <label for="oname" class="col-md-3 col-form-label text-md-right">Offer Name</label>
                            <div class="col-md-5">
                                <input id="ooname" type="text" class="form-control @error('ooname') is-invalid @enderror" name="ooname" value="{{$oname}}" required autofocus disabled>
                                <input id="oname" type="hidden" name="oname" value="{{$oname}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start" class="col-md-3 col-form-label text-md-right">Start On</label>
                            <div class="col-md-6">                                
                                <input type="text" id="start" name="start" class="form-control" value="{{$start}}" required autocomplete="off">         
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="end" class="col-md-3 col-form-label text-md-right">End On</label>
                            <div class="col-md-6">                                
                                <input type="text" id="end" name="end" class="form-control" value="{{$end}}" required autocomplete="off">           
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="pos" class="col-md-3 col-form-label text-md-right">Banner position</label>
                            <div class="col-md-2">
                                 <select class="form-control" id="pos" name="pos">
                                 	@if($pos==1)
                                    <option value="1" selected>1st</option>
                                    @else
                                    <option value="1">1st</option>
                                    @endif
                                    @if($pos==2)
                                    <option value="2" selected>2nd</option>
                                    @else
                                    <option value="2">2nd</option>
                                    @endif
                                    @if($pos==3)
                                    <option value="3" selected>3rd</option>
                                    @else
                                    <option value="3">3rd</option>
                                    @endif
                                    @if($pos==4)
                                    <option value="4" selected>4th</option>
                                    @else
                                    <option value="4">4th</option>
                                    @endif
                                    @if($pos==5)
                                    <option value="5" selected>5th</option>
                                    @else
                                    <option value="5">5th</option>
                                    @endif                                            
                                </select>
                            </div>
                        </div>
                        <div class=" form-group row">
                            <div class="col-md-8 col-12">
                                Banner Image:
                            </div>
                        </div>
                        <div class=" form-group row">
                            <div class="col-12 col-md-8">
                                <img src="/storage/banner/{{$oimg}}" width="100%">
                            </div>
                        </div>         
                        <div class="form-group row mt-1">
                            <div class="col-md-3 text-md-right">
                                <label for="oimg">Change Image:</label>
                            </div>
                            <div class="col-md-4">
                                <input id="oimg" type="file" class="form-control-file" name="oimg" accept="image/*">
                            </div>
                        </div>   
                        <div class="form-group row">
						    <div class="col-md-3 col-3 text-md-right text-right">
						        <label for="p_off">Give</label>
						    </div>
						    <div class="col-md-6 col-6">
						        <select class="form-control" id="p_off" name="p_off" onchange="changeP_off()">
						            <option value="10" selected>10% OFF</option>
						            <option value="15">15% OFF</option>
						            <option value="20">20% OFF</option>
						            <option value="25">25% OFF</option>
						            <option value="30">30% OFF</option>
						            <option value="35">35% OFF</option>
						            <option value="40">40% OFF</option>
						            <option value="45">45% OFF</option>
						            <option value="50">50% OFF</option>
						            <option value="55">55% OFF</option>
						            <option value="60">60% OFF</option>
						            <option value="65">65% OFF</option>
						            <option value="70">70% OFF</option> 
						            <option value="75">75% OFF</option>                                    
						        </select>
						    </div>
						     <div class="col-md-3 col-3">
						        <label for="p_off">On</label>
						    </div>
						</div>
						<div class="form-group row">
							<div class="col-md-6 col-12 mb-1">
	                            <select class="form-control" id="category" name="category" onchange="changeCat()">
	                                <option value="ox">Oxidized</option>
	                                <option value="ad">AD</option>
	                                <option value="pk">Polki & Kundan</option>
	                                <option value="mk">Meenakari</option>
	                                <option value="itr">Indian Traditional</option>
	                                <option value="ntr">Nepali Traditional</option>
	                                <option value="md">Modern</option>
	                                <option value="br">Bridal</option>
	                            </select>
	                        </div> 
                           	<div class="col-md-6 col-12">
                                <select class="form-control" id="sub_category" name="sub_category" onchange="changeScat()">
                                    <option value="ear">Earrings</option>
                                    <option value="neck">Necklace Set</option>
                                    <option value="bang">Bangle</option>
                                    <option value="ring">Ring</option>
                                    <option value="none">None</option>        
                                </select>
                            </div>
                        </div>  
                        <div id="o_photos" style="display:none;">

                        </div>  
                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-10">
                                <button  type="submit" class="btn" onclick="return cnf()" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </form>              
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
