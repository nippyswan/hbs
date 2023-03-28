<div class="row mb-3">
    <div class="col-1 col-md-1 text-md-right">
        <input type="checkbox" class="form-check-input" id="selectall" style="width:30px;height:30px;" onchange="checkall()">
    </div>
    <label class="col-10 col-md-10 col-form-label">
        Select All
    </label>
</div>
<div class="row" style="margin-bottom: 10px;">
@for($i=0; $i < $count ; $i++)
    @if($chst[$i]==0)
    <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="op{{$item_id[$i]}}">
        <a>
            <img class="catimg" src="/storage/product/low/low_{{$photos[$i]}}" alt="{{$photos[$i]}}" >
            <div class="form-check" style="position: absolute;top:7%;left:10%;">
                <input name="item_{{$item_id[$i]}}" type="checkbox" class="selectall form-check-input" value="{{$item_id[$i]}}" style="width:50px;height:50px;opacity: 30%;"> 
            </div>              
        </a>
    </div>
    @endif
    @if($chst[$i]==1)
    <div class="col-4 col-sm-4 col-md-3 col-lg-3 col-xl-3" style="position:relative;padding:1px;" id="op{{$item_id[$i]}}">
        <a>
            <img class="catimg" src="/storage/product/low/low_{{$photos[$i]}}" alt="{{$photos[$i]}}" >
            <div class="form-check" style="position: absolute;top:7%;left:10%;">
                <input name="item_{{$item_id[$i]}}" type="checkbox" class="selectall form-check-input" value="{{$item_id[$i]}}" style="width:50px;height:50px;opacity: 30%;" checked> 
            </div>              
        </a>
    </div>
    @endif
@endfor
</div>  
