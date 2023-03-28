@extends('layouts.app')
@section('content')
<script type="text/javascript">
    function cnf(){var cnf=confirm("Confirm Action?");if(cnf==true)return true;else return false;}
</script>
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
    @foreach($off as $offer)
    <div class="card" style="border-bottom-style: solid; border-width: 2px; border-color: #444;">
        <div class="card-header">
            <div class="row justify-content-center" >
                <div class="col-12 col-md-8" style="font-size: 20px;">
                    <b>{{ucfirst($offer->oname)}}</b>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row justify-content-center" >
                <div class="col-4 col-md-2 text-md-right p-0">
                    <b>Position:</b>
                </div>
                <div class="col-8 col-md-6">
                    {{$offer->pos}}
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-4 col-md-2 text-md-right p-0">
                    <b>Start On:</b>
                </div>
                <div class="col-8 col-md-6 p-0 pl-1">
                    {{$offer->start}}
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-4 col-md-2 text-md-right p-0">
                    <b>End On:</b>
                </div>
                <div class="col-8 col-md-6 p-0 pl-1">
                    {{$offer->end}}
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-12 col-md-8">
                    <b>Banner Image:</b>
                </div>
            </div>
            <div class="row justify-content-center mb-2" >
                <div class="col-12 col-md-8">
                    <img src="/storage/banner/{{$offer->oimg}}" width="100%">
                </div>
            </div>
            <div class="row justify-content-center" >
                <div class="col-6 col-md-4">
                    <a class="btn btn-dark" href="/editOffer/delete/{{$offer->oname}}" onclick="return cnf()">Delete</a>
                </div>
                <div class="col-6 col-md-4">
                    <a class="btn btn-dark" href="/editOffer/{{$offer->oname}}">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection