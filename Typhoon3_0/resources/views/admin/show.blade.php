@extends('layouts.admin_app')
@section('content')
<div class="top-container" style="margin: 30px 60px 60px 60px">
<div style="display:flex">
<div class="image-wrapper" style="margin-right:15px">
<img src="../../images/sushi.jpg" style="height: 295px; width: 370px;"></div>
<div class="disc-wrapper">
<h3 style=""> <span">{{$dishes->name}}</span> <br><br></h3>
<h5 style=""> <span">{{$dishes->description}}</span> <br><br></h5>
<h3 style="margin-top:15px">{{$dishes->price}} zł</h3>
<form action="{{ route('dishes.destroy',$dishes->id) }}" method="POST">
        @csrf
        @method('DELETE')   
        <button style="display:block; margin-left:auto; margin-right:auto; margin-top:20px; width: 100px" type="submit" class="btn btn-primary">Delete</button>
</form>
<form action="{{route('update-dish', $dishes->id)}}">
        <button style="display:block; margin-left:auto; margin-right:auto; margin-top:20px; width: 100px" type="submit" class="btn btn-primary">Update</button>
</form>

</div>
</div>
</div>



@endsection