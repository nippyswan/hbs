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
                <div class="card-header">Lock / Unlock Website</div>
                <div class="card-body">
                    <form method="POST" action="/lockWeb">
                        @csrf
                                          
                        <div class="form-group row">
                            <div class="row">
                                <div class="col-12 ml-4">
                                    @if($l==0)
                                    <input class="form-check-input" type="radio" name="lock" value="0" checked>
                                    @else
                                    <input class="form-check-input" type="radio" name="lock" value="0">
                                    @endif
                                    <label for="lock" class="form-check-label text-md-right ml-2">Unlocked</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 ml-4">
                                    @if($l==1)
                                    <input class="form-check-input" type="radio" name="lock" value="1" checked>
                                    @else
                                    <input class="form-check-input" type="radio" name="lock" value="1">
                                    @endif
                                    <label for="lock" class="form-check-label text-md-right ml-2">Locked</label>
                                </div>
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