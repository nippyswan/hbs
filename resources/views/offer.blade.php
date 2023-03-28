@extends('layouts.app')
@section('content')
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script type="text/javascript">$( function() {
    $( "#start" ).datepicker();
    $( "#end" ).datepicker();
  } );</script>
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
                <div class="card-header">Add Offer </div>
                <div class="card-body">
                    <form method="POST" action="/offer" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="base64" name="base64"> 
                        <div class="form-group row">
                            <label for="oname" class="col-md-3 col-form-label text-md-right">Offer Name</label>
                            <div class="col-md-5">
                                <input id="oname" type="text" class="form-control @error('oname') is-invalid @enderror" name="oname" value="{{ old('oname') }}" required autofocus>
                                @error('oname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Same offer name exists!</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="start" class="col-md-3 col-form-label text-md-right">Start On</label>
                            <div class="col-md-6">                                
                                <input type="text" id="start" name="start" class="form-control" required autocomplete="off">         
                            </div>
                        </div>  
                        <div class="form-group row">
                            <label for="end" class="col-md-3 col-form-label text-md-right">End On</label>
                            <div class="col-md-6">                                
                                <input type="text" id="end" name="end" class="form-control" required autocomplete="off">            
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="oimg">Banner Image</label>
                            </div>
                            <div class="col-md-4">
                                <input id="oimg" type="file" class="form-control-file" name="oimg" accept="image/*" required>
                            </div>
                        </div>   
                        <div class="form-group row">
                            <label for="pos" class="col-md-3 col-form-label text-md-right">Banner position</label>
                            <div class="col-md-2">
                                 <select class="form-control" id="pos" name="pos">
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                    <option value="5">5th</option>                                            
                                </select>
                            </div>
                        </div>               
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-3">
                                <button  type="submit" class="btn" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;">
                                    Submit
                                </button>                                
                            </div>
                        </div>
                    </form>              
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
    	<div class="col-12 col-md-8">
    		<a href="/offer/show">See/Edit Offers</a>
    	</div>
    </div>
</div>
@endsection