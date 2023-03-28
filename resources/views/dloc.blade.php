@extends('layouts.app')
@section('content')
@if(Session::has('dlocadd'))<div class="alert alert-success">{{Session::get('dlocadd')}}</div>@endif
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
                <div class="card-header">Add Delivery Locations</div>
                <div class="card-body">
                    <form method="POST" action="/dloc" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="base64" name="base64">                        
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="image">Image</label>
                            </div>
                            <div class="col-md-4">
                                <input type="file" class="form-control-file" name="image" id="image" accept="image/*" required>
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
</div>
@endsection