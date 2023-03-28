@extends('layouts.app')
@section('content')
<script type="text/javascript">function checkFiles(files){if(files.length>20){alert("Maximum 20 photos!");let list=new DataTransfer;for(let i=0; i<20; i++)list.items.add(files[i]);document.getElementById('files').files = list.files;}}</script>
@if(Session::has('padd'))<div class="alert alert-success">{{Session::get('padd')}}</div>@endif
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
                <div class="card-header">Add Product</div>
                <div class="card-body">
                    <form method="POST" action="/product" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="base64" name="base64">                        
                        <div class="form-group row">
                            <label for="id" class="col-md-3 col-form-label text-md-right">Code</label>
                            <div class="col-md-3">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{ old('id') }}" required autofocus>
                                @error('id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="title" class="col-md-3 col-form-label text-md-right">Title</label>
                            <div class="col-md-9">
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title">
                                @error('title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>                        
                        <div class="form-group row">
                            <label for="price" class="col-md-3 col-form-label text-md-right">Price</label>
                            <div class="col-md-3">
                                <input id="price" type="number" min=1 class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" >
                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>                            
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="category">Category</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="category" name="category">
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
                            <div class="col-md-3 text-md-right">
                                <label for="sub_category">Sub-Category</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="sub_category" name="sub_category">
                                    <option value="ear">Earrings</option>
                                    <option value="neck">Necklace Set</option>
                                    <option value="bang">Bangle</option>
                                    <option value="ring">Ring</option>
                                    <option value="none">None</option>        
                                </select>
                            </div>
                        </div>    
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="images">Image/s</label>
                            </div>
                            <div class="col-md-4">
                                <input id="files" type="file" class="form-control-file" name="images[]" id="images" accept="image/*" multiple onchange="checkFiles(this.files)" required>
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