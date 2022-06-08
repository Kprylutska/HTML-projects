@extends('layouts.admin_app')
@section('content')
@foreach ($orders as $order)
<!-- <div style="height: 500px; width: 300px; background-color: #1d2528; margin: 25px 10px 25px"> -->
    <!-- <img src="../../images/sushi.jpg" style="height: 225px; width: 300px;">
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$order->dishes_id}}</h3>
    <h5 style="text-align: center; width 300px; height: 150px; margin-top:10px; background-color: #2e3a3f; margin-left:10px; margin-right:10px;">{{$order->dishes_name}}</ht>
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$order->dishes_count}}</h3>
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$order->dishes_price}}</h3>
    <div style="display: flex">
    <form action="{{ route('dishes.destroy',$order->id) }}" method="POST">
        @csrf
        @method('DELETE')   
        <button style="display:block; margin-left:30px; margin-right:auto; margin-top:20px; width: 100px" type="submit" class="btn btn-primary">Delete</button>
    </form>
    </div> -->
    <table class="table">
	<thead>
		<tr>
			<th>Order ID</th>
            <th>Dish's ID</th>
			<th>Dish's name</th>
			<th>Dish's count</th>
			<th>Dish's price</th>
            <th>Name and Surname</th>
            <th>Phone number</th>
            <th>Adress</th>
            <th>Data zamówienia</th>
            
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>{{$order->id}}</td>
			<td>{{$order->dishes_id}}</td>
			<td>{{$order->dishes_name}}</td>
			<td>{{$order->dishes_count}}</td>
			<td>{{$order->dishes_price}}</td>
            <td>{{$order->name_and_surname}}</td>
            <td>{{$order->phone_number}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->created_at}}</td>
		</tr>
	</tbody>
</table>
    <!-- <div style="display:block; margin-left:auto; margin-right:auto; margin-top:20px; width: 200px"><a href="{{route('adminDishes', $order->id)}}">Details</a></div> -->
<!-- </div> -->



@endforeach 
@endsection