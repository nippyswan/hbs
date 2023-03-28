@extends('layouts.app')
@section('content')
<?php
$i=array();
foreach ($pr as $p){$id=$p->ID;$title=$p->title;$price=$p->price;$dprice=$p->dprice;$p_off=$p->p_off;$recom=$p->recom;$category=$p->category;$sub_category=$p->sub_category;$oos=$p->oos;$i[0]=$p->i1;$i[1]=$p->i2;$i[2]=$p->i3;$i[3]=$p->i4;$i[4]=$p->i5;$i[5]=$p->i6;$i[6]=$p->i7;$i[7]=$p->i8;$i[8]=$p->i9;$i[9]=$p->i10;$i[10]=$p->i11;$i[11]=$p->i12;$i[12]=$p->i13;$i[13]=$p->i14;$i[14]=$p->i15;$i[15]=$p->i16;$i[16]=$p->i17;$i[17]=$p->i18;$i[18]=$p->i19;$i[19]=$p->i20;$oos[0]=$p->oos1;$oos[1]=$p->oos2;$oos[2]=$p->oos3;$oos[3]=$p->oos4;$oos[4]=$p->oos5;$oos[5]=$p->oos6;$oos[6]=$p->oos7;$oos[7]=$p->oos8;$oos[8]=$p->oos9;$oos[9]=$p->oos10;$oos[10]=$p->oos11;$oos[11]=$p->oos12;$oos[12]=$p->oos13;$oos[13]=$p->oos14;$oos[14]=$p->oos15;$oos[15]=$p->oos16;$oos[16]=$p->oos17;$oos[17]=$p->oos18;$oos[18]=$p->oos19;$oos[19]=$p->oos20;}
    $c=0;                           
    $pos=array();
    for($j=0;$j<20;$j++)
    {
        if($i[$j]!==NULL)
        {
            $i[$c]=$i[$j];
            $pos[$c]='i'.($j+1);//store image column positions in pos array
            $c++;
        }
    }
?>
<script type="text/javascript">function checkFilesEdit(files){var cnt = <?php echo json_encode($c)?>;var cn=20-cnt;if(files.length>cn){if(cn==0)alert("Maximum no. of photos already uploaded!");else alert("Maximum "+cn+" photos!");let list = new DataTransfer;          for(let i=0; i<cn; i++)list.items.add(files[i]);document.getElementById('filesedit').files = list.files;}}function cnf(){var cnf=confirm("Confirm Action?");if(cnf==true)return true;else return false;}</script>
@auth
<div class="d-flex align-items-center sticky-top justify-content-end mb-2 mt-0 mr-5" style="height:30px;background-color:#000;">
    <div class="dropdown">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;">
        {{ ucfirst(Auth::user()->username) }}
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="background-color:#000;color:#fff;border-style:solid; border-color:#333;" >
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
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
      </div>
    </div>     
</div>
@endauth
<div class="container" style="margin-bottom:50px;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color:#000;border-style:none;color:#fff;">
                <div class="card-header">
                    <div class="row">
                        <div class="col-6">
                        Edit Product  
                        </div>
                        <div class="col-6">
                            <a href="/editProductForm/delete/{{$id}}"  class="btn" style="background-color:#000;color:#fff;border-style:solid;border-color:#333;" onclick="return cnf()">
                                Delete
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="/editProductForm" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" id="base64" name="base64">
                        <input type="hidden" name="idv" value="{{$id}}">
                        <div class="form-group row">
                            <label for="id" class="col-md-3 col-form-label text-md-right">Code</label>
                            <div class="col-md-3">
                                <input id="id" type="text" class="form-control @error('id') is-invalid @enderror" name="id" value="{{$id}}" required disabled>
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
                                <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{$title}}" required autocomplete="title" autofocus>
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
                                <input id="price" type="number" min=1 class="form-control @error('price') is-invalid @enderror" name="price" value="{{$price}}" required autocomplete="price" >
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
                                <select class="form-control" id="category" name="category" value="{{$category}}">
                                    @if($category=='ox')
                                    <option value="ox" selected>Oxidized</option>
                                    @else
                                    <option value="ox">Oxidized</option>
                                    @endif
                                    @if($category=='ad')
                                    <option value="ad" selected>AD</option>
                                    @else
                                    <option value="ad">AD</option>
                                    @endif
                                    @if($category=='pk')
                                    <option value="pk" selected>Polki & Kundan</option>
                                    @else
                                    <option value="pk">Polki & Kundan</option>
                                    @endif
                                    @if($category=='mk')
                                    <option value="mk" selected>Meenakari</option>
                                    @else
                                    <option value="mk">Meenakari</option>
                                    @endif
                                    @if($category=='itr')
                                    <option value="itr" selected>Indian Traditional</option>
                                    @else
                                    <option value="itr">Indian Traditional</option>
                                    @endif
                                    @if($category=='ntr')
                                    <option value="ntr" selected>Nepali Traditional</option>
                                    @else
                                    <option value="ntr">Nepali Traditional</option>
                                    @endif
                                    @if($category=='md')
                                    <option value="md" selected>Modern</option>
                                    @else
                                    <option value="md">Modern</option>
                                    @endif
                                    @if($category=='br')
                                    <option value="br" selected>Bridal</option>
                                    @else
                                    <option value="br">Bridal</option>
                                    @endif                                  
                                </select>
                            </div>
                            <div class="col-md-3 text-md-right">
                                <label for="sub_category">Sub-Category</label>
                            </div>
                            <div class="col-md-3">
                                <select class="form-control" id="sub_category" name="sub_category">
                                    @if($sub_category=='ear')
                                    <option value="ear" selected>Earrings</option>
                                    @else
                                    <option value="ear">Earrings</option>
                                    @endif  
                                    @if($sub_category=='neck')
                                    <option value="neck" selected>Necklace Set</option>
                                    @else
                                    <option value="neck">Necklace Set</option>
                                    @endif
                                    @if($sub_category=='ring')
                                    <option value="ring" selected>Ring</option>
                                    @else
                                    <option value="ring">Ring</option>
                                    @endif
                                    @if($sub_category=='bang')
                                    <option value="bang" selected>Bangle</option>
                                    @else
                                    <option value="bang">Bangle</option>
                                    @endif
                                    @if($sub_category=='nose')
                                    <option value="nose" selected>Nose-pin</option>
                                    @else
                                    <option value="nose">Nose-pin</option>
                                    @endif
                                    @if($sub_category=='ganthan')
                                    <option value="ganthan" selected>Ganthan</option>
                                    @else
                                    <option value="ganthan">Ganthan</option>
                                    @endif
                                    @if($sub_category=='none')
                                    <option value="none" selected>None</option>
                                    @else
                                    <option value="none">None</option>
                                    @endif
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-3 text-md-right">
                                <label for="images">Image/s</label>
                            </div>
                            <div class="col-md-4">
                                <input id="filesedit" type="file" class="form-control-file" name="images[]" id="images" accept="image/*" multiple
                                onchange="checkFilesEdit(this.files)">
                            </div>                            
                        </div>   
                        <div class="row">
                            @for ($j = 1; $j <=$c; $j++)
                            <div class="col-6 col-md-4 p-1">
                                <div class="row">
                                    <div class="col-12 ml-4">
                                        @if($oos[$j-1]==0)
                                        <input class="form-check-input" type="radio" name="{{$pos[$j-1]}}" id="{{$pos[$j-1]}}" value="is" checked>
                                        @endif
                                        @if($oos[$j-1]==1)
                                        <input class="form-check-input" type="radio" name="{{$pos[$j-1]}}" id="{{$pos[$j-1]}}" value="is">
                                        @endif
                                        <label for="{{$pos[$j-1]}}" class="form-check-label text-md-right ml-2">In-Stock</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ml-4">
                                        @if($oos[$j-1]==0)
                                        <input class="form-check-input" type="radio" name="{{$pos[$j-1]}}" id="{{$pos[$j-1]}}" value="oos">
                                        @endif
                                        @if($oos[$j-1]==1)
                                        <input class="form-check-input" type="radio" name="{{$pos[$j-1]}}" id="{{$pos[$j-1]}}" value="oos" checked>
                                        @endif
                                        <label for="{{$pos[$j-1]}}" class="form-check-label text-md-right ml-2">Out-of-Stock</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12 ml-4">
                                        <input class="form-check-input" type="radio" name="{{$pos[$j-1]}}" id="{{$pos[$j-1]}}" value="dlt">
                                        <label for="{{$pos[$j-1]}}" class="form-check-label text-md-right ml-2">Delete</label>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-12">
                                        <img src="/storage/product/{{$i[$j-1]}}" class="shopimg">
                                    </div>
                                </div>
                            </div>
                            @endfor
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-12 offset-md-10">
                                <button onclick="return cnf()" type="submit" class="btn" style="background-color:#000;color:#fff; border-style:solid;border-color:#333;">
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