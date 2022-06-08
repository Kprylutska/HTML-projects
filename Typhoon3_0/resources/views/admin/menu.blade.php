@extends('layouts.admin_app')
@section('content')
@foreach ($dishes as $dish)
<div style="height: 500px; width: 300px; background-color: #1d2528; margin: 25px 10px 25px">
    <img src="../images/sushi.jpg" style="height: 225px; width: 300px;">
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$dish->name}}</h3>
    <h5 style="text-align: center; width 300px; height: 150px; margin-top:10px; background-color: #2e3a3f; margin-left:10px; margin-right:10px;">{{$dish->description}}</ht>
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$dish->price}} PLN</h3>
    <div style="display: flex">
    <form action="{{route('adminDishes', $dish->id)}}">
        <input style="display:block; margin-left:35px; margin-right:auto; margin-top:20px; width: 100px" type="submit" class="btn btn-primary" value="Details">
    </form>
    <form action="{{ route('dishes.destroy',$dish->id) }}" method="POST">
        @csrf
        @method('DELETE')   
        <button style="display:block; margin-left:30px; margin-right:auto; margin-top:20px; width: 100px" type="submit" class="btn btn-primary">Delete</button>
    </form>
    </div>
    <!-- <div style="display:block; margin-left:auto; margin-right:auto; margin-top:20px; width: 200px"><a href="{{route('adminDishes', $dish->id)}}">Details</a></div> -->
</div>
@endforeach 
@endsection
