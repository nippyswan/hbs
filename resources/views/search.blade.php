@extends('layouts.app')
@section('content')
@if(Session::has('search')) <div class="alert alert-success"> {{Session::get('search')}} </div> @endif
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
<div class="container">
    <div class="row" > 
        <div class="col-md-3">
        </div>
        <div class="col-12 col-md-6 mt-3 mb-2">
            <a class="btn btn-dark" href="/">Go Back</a>
        </div>
    </div>
</div>
@foreach($arr as $a)    
    <div class="container mt-3" id="id{{$a->ID}}">
        @auth
        <div class="row justify-content-center mt-1 mb-1">
            
            <div class="col-12 col-md-6 pl-3">
                <a class="btn btn-dark" href="/editProductForm/{{$a->ID}}">Edit</a>
            </div>
        </div>
        @endauth
        <div class="row justify-content-center">
            <div class="col-4 col-md-2">
                <h4><b>{{$a->ID}}</b></h4> 
            </div>
            <div class="col-4 col-md-2 text-md-right text-right pr-1">
                @if($a->category=='ox')
                Oxidized
                @elseif($a->category=='ad')
                American Diamond
                @elseif($a->category=='pk')
                Polki & Kundan
                @elseif($a->category=='mk')
                Meenakari
                @elseif($a->category=='itr')
                Indian Traditional
                @elseif($a->category=='ntr')
                Nepali Traditional
                @elseif($a->category=='md')
                Modern
                @else
                Bridal
                @endif
            </div>
            <div class="col-md-2 col-4 pl-0">
                @if($a->sub_category=='ear')
                Earring
                @elseif($a->sub_category=='neck')
                Necklace Set
                @elseif($a->sub_category=='bang')
                Bangle
                @elseif($a->sub_category=='ring')
                Ring
                @else
                None
                @endif
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">                
                <div id="carousel{{$a->ID}}" class="carousel carousel-fade" data-touch="false" data-interval="false">
                    <ol class="carousel-indicators" style="z-index:2;">
                        @if($a->i1!==NUll)
                            @if($a->i2!==NUll)
                                <li data-target="#carousel{{$a->ID}}" data-slide-to="0" class="active"></li>
                            @endif
                        @endif
                        @if($a->i2!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="1"></li>
                        @endif
                        @if($a->i3!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="2"></li>
                        @endif
                        @if($a->i4!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="3"></li>
                        @endif
                        @if($a->i5!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="4"></li>
                        @endif
                        @if($a->i6!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="5"></li>
                        @endif
                        @if($a->i7!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="6"></li>
                        @endif
                        @if($a->i8!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="7"></li>
                        @endif
                        @if($a->i9!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="8"></li>
                        @endif
                        @if($a->i10!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="9"></li>
                        @endif
                        @if($a->i11!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="10"></li>
                        @endif
                        @if($a->i12!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="11"></li>
                        @endif
                        @if($a->i13!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="12"></li>
                        @endif
                        @if($a->i14!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="13"</li>
                        @endif
                        @if($a->i15!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="14"></li>
                        @endif
                        @if($a->i16!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="15"></li>
                        @endif
                        @if($a->i17!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="16"></li>
                        @endif
                        @if($a->i18!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="17"></li>
                        @endif
                        @if($a->i19!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="18"></li>
                        @endif
                        @if($a->i20!==NUll)
                        <li data-target="#carousel{{$a->ID}}" data-slide-to="19"></li>
                        @endif
                    </ol>
                    <div class="carousel-inner">
                        @if($a->i1!==NUll)
                        <div class="carousel-item active">
                            <img src="/storage/product/{{$a->i1}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos1==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i1}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i2!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i2}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos2==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i2}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i3!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i3}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos3==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i3}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i4!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i4}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos4==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i4}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i5!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i5}}" class="d-block w-100" alt="{{$a->title}}">
                            @if($a->oos5==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i5}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i6!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i6}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos6==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i6}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i7!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i7}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos7==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i7}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i8!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i8}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos8==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i8}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i9!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i9}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos9==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i9}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i10!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i10}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos10==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i10}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i11!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i11}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos11==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i11}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i12!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i12}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos12==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i12}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i13!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i13}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos13==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i13}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i14!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i14}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos14==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i14}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i15!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i15}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos15==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i15}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i16!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i16}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos16==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i16}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i17!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i17}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos17==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i17}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i18!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i18}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos18==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i18}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i19!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i19}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos19==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i19}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                         @if($a->i20!==NUll)
                        <div class="carousel-item">
                            <img src="/storage/product/{{$a->i20}}" class="d-block w-100" alt="{{$a->title}}" >
                            @if($a->oos20==1)
                            <div class="shoptxt" style="top:70%;font-size:30px;background-color:#000;opacity:50%;">
                                Out of Stock
                            </div>
                             @else
                            <a class="btn btn-dark" href="https://wa.me/9779824318970?text=https%3A%2f%2fwww%2Ehandpickedbyswan%2Ecom%2fstorage%2fproduct%2f{{$a->i20}}" target="_blank" style="position:absolute;top:75%;left:65%;opacity:50%;">Buy Now</a>
                            @endif
                        </div>
                        @endif
                    </div>
                    @if($a->i2!==NUll)
                    <a class="carousel-control-prev" href="#carousel{{$a->ID}}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel{{$a->ID}}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    @endif
                </div>
            </div>
        </div>  
        @if($mx!=0)
        <div class="row justify-content-center">
            <div class="col-md-4 col-8" style="color:#aaa;"> 
                <strike class="pl-3 pt-3">Rs. {{$a->price}}</strike>
            </div>
            <div class="col-md-2 col-4" style="color:#aaa;">
                {{$mx}}% OFF
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h4 class="pl-3 pb-1"><b> Rs. {{$nw}}</b></h4>
            </div>
        </div>
        @else
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h4 class="pl-3 pt-3 pb-1"><b>Rs. {{$a->price}}</b></h4>
            </div>
        </div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-6 col-12"> 
                <h6 class="pl-3 pb-3"><b>{{ucfirst($a->title)}}</b></h6>
            </div>
        </div>
    </div>
@endforeach
@endsection