@foreach($crr as $cr)
<div class="col-4 col-sm-4 col-md-2 col-lg-2 col-xl-2 p-1" style="position:relative;" id="{{$cr->id}}">
    <a onclick="crHigh('{{$cr->id}}')" style="cursor:pointer;">
        <img class="shopimg" src="/storage/custReview/low/low_{{$cr->img}}" style="border-style:solid;border-width:1px;border-color:#fff;border-radius:0px;">
    </a>
    @auth
    <a class="btn btn-dark" href="/custReview/delete/{{$cr->id}}" onclick="return cnf()" style="position:absolute;top:5%;right:10%;">Delete</a>
    @endauth
</div>
@endforeach