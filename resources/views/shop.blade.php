
<div class="container sticky-top" style="margin-bottom:5px;z-index:1;">
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <div class="card">
                <div class="card-header" style="padding-bottom:10px;">
                    <a onclick="closeshop('{{$qr}}')">
                        <img src="/png/back.png" height="30" width="30" style="cursor:pointer;margin-right:20px;padding-bottom:5px;"> 
                    </a> 
                    @if($qr=='ox')
                    <span style="font-size:25px;">
                    Oxidized
                    </span>
                    @elseif($qr=='ad')
                    <span style="font-size:25px;">
                    American Diamond
                    </span>
                    @elseif($qr=='pk')
                    <span style="font-size:25px;">
                    Polki & Kundan
                    </span>
                    @elseif($qr=='mk')
                    <span style="font-size:25px;">
                    Meenakari
                    </span>
                    @elseif($qr=='itr')
                    <span style="font-size:25px;">
                    Indian Traditional
                    </span>
                    @elseif($qr=='ntr')
                    <span style="font-size:25px;">
                    Nepali Traditional
                    </span>
                    @elseif($qr=='md')
                    <span style="font-size:25px;">
                    Modern
                    </span>
                    @elseif($qr=='br')
                    <span style="font-size:25px;">
                    Bridal
                    </span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container justify-content-between" style="border-bottom-style:solid;border-color:#444;border-width:1px;">
    <ul class="nav nav-justified pb-3 pt-2" id="scat-tab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="ear-tab" data-toggle="pill" href="#ear" role="tab" aria-controls="ear" aria-selected="true">
            <img src="/png/ear.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="neck-tab" data-toggle="pill" href="#neck" role="tab" aria-controls="neck" aria-selected="false">
            <img src="/png/neck.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " id="bang-tab" data-toggle="pill" href="#bang" role="tab" aria-controls="bang" aria-selected="false">
            <img src="/png/bang.png" width="30" height="30" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="ring-tab" data-toggle="pill" href="#ring" role="tab" aria-controls="ring" aria-selected="false">
            <img src="/png/ring.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="none-tab" data-toggle="pill" href="#none" role="tab" aria-controls="none" aria-selected="false">
            <img src="/png/none.png" width="25" height="25" alt="" style="margin-top:5px;">
          </a>
        </li>
    </ul>
</div>
<div class="tab-content" id="scat-page" >
    <div class="tab-pane fade show active" id="ear" role="tabpanel" aria-labelledby="ear-tab">
        <div class="container" >            
            <div class="row justify-content-start mt-2">
                @foreach($ear as $r)
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="small{{$r->ID}}">
                    <a onclick="details('{{$r->ID}}')" style="cursor:pointer;">
                        <img class="catimg" src="/storage/product/low/low_{{$r->i1}}" alt="{{$r->title}}" >                   
                    </a>
                </div>
                @endforeach                     
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="neck" role="tabpanel" aria-labelledby="neck-tab">
        <div class="container" >            
            <div class="row justify-content-start mt-2">
                @foreach($neck as $r)
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="small{{$r->ID}}">
                    <a onclick="details('{{$r->ID}}')" style="cursor:pointer;">
                        <img class="catimg" src="/storage/product/low/low_{{$r->i1}}" alt="{{$r->title}}" >                   
                    </a>
                </div>
                @endforeach                 
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="bang" role="tabpanel" aria-labelledby="bang-tab">
        <div class="container" >            
            <div class="row justify-content-start mt-2">
                @foreach($bang as $r)
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="small{{$r->ID}}">
                    <a onclick="details('{{$r->ID}}')" style="cursor:pointer;">
                        <img class="catimg" src="/storage/product/low/low_{{$r->i1}}" alt="{{$r->title}}" >                   
                    </a>
                </div>
                @endforeach               
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="ring" role="tabpanel" aria-labelledby="ring-tab" style="margin-bottom:80px;">
        <div class="container" >            
            <div class="row justify-content-start mt-2">
                @foreach($ring as $r)
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="small{{$r->ID}}">
                    <a onclick="details('{{$r->ID}}')" style="cursor:pointer;">
                        <img class="catimg" src="/storage/product/low/low_{{$r->i1}}" alt="{{$r->title}}" >                   
                    </a>
                </div>
                @endforeach               
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="none" role="tabpanel" aria-labelledby="none-tab">
        <div class="container" >            
            <div class="row justify-content-start mt-2">
                @foreach($none as $r)
                <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="small{{$r->ID}}">
                    <a onclick="details('{{$r->ID}}')" style="cursor:pointer;">
                        <img class="catimg" src="/storage/product/low/low_{{$r->i1}}" alt="{{$r->title}}" >                   
                    </a>
                </div>
                @endforeach               
            </div>
        </div>  
    </div>
</div>
