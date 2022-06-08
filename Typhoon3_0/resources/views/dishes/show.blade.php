@extends('layouts.app')

@section('content')

<div class="top-container" style="margin: 30px 60px 60px 60px">
<div style="display:flex">
<div class="image-wrapper" style="margin-right:15px">
<img src="../images/sushi.jpg" style="height: 295px; width: 370px;"></div>
<div class="disc-wrapper">
<h3 style=""> <span">{{$item->name}}</span> <br><br></h3>
<h5 style=""> <span">{{$item->description}}</span> <br><br></h5>
<h3 style="margin-top:15px">{{$item->price}} zł</h3>
<form action="{{ route('add.to.cart', $item->id) }}">
    <input style="margin-top:15px; margin-bottom:0;  width: 200px" type="submit" class="btn btn-warning btn-block text-center" value="Dodaj do koszyka ">
</form>

</div>
</div>
</div>

@endsection