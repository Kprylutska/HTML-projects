@extends('layouts.app')

@section('content')

<body>
    

<div class="main-container" style="">
<h1 style="margin-left:60px">Zestawy dnia</h1>
<div class="top-container" style="margin: 30px 60px 60px 60px">
<div style="display:flex">
<div class="image-wrapper" style="margin-right:15px">
<img src="../images/sushi.jpg" style="height: 295px; width: 370px;"></div>
<div class="disc-wrapper">
<h5 style=""> <span">Zestaw BRAND IV</span> <br><br>
Uramaki z pastą z dorady i ryby maślanej 6szt
Futomaki z pikantnym tatarem z łososia 6szt
Futomaki z łososiem grillowanym na słodko w omlecie 6szt
Futomaki z krewetkami w tempurze i pikantnym sosem 6szt
Futomaki z łososiem i avocado 6szt
Hosomaki z marynowaną rzepą 6szt
Nigiri z tuńczykiem 3szt</h5>

<input style="float: right; margin-top:100px;  width: 200px" type="submit" class="btn btn-primary" value="Details">
</div>
</div>
</div>
<div class="bot-container" style="margin: 30px 60px 30px 60px">
<div style="display:flex">
<div class="disc2-wrapper">
<h5>Zestaw BRAND IV<br><br>
Uramaki z pastą z dorady i ryby maślanej 6szt
Futomaki z pikantnym tatarem z łososia 6szt
Futomaki z łososiem grillowanym na słodko w omlecie 6szt
Futomaki z krewetkami w tempurze i pikantnym sosem 6szt
Futomaki z łososiem i avocado 6szt
Hosomaki z marynowaną rzepą 6szt
Nigiri z tuńczykiem 3szt</h5>
<input style="float: left; margin-top:100px;  width: 200px" type="submit" class="btn btn-primary" value="Details">
</div>
<div class="image2-wrapper">
<img src="../images/sushi.jpg" style="height: 295px; width: 370px;"></div>

</div>
</div>
<h1 style="margin-left:60px">Promocje</h1>
<div class="container-promocje" style="display: flex; flex-wrap: wrap; justify-content: center;">
@foreach ($dishes as $item)
<div style="height: 500px; width: 300px; background-color: #1d2528; margin: 25px 10px 25px">
    <img src="../images/sushi.jpg" style="height: 225px; width: 300px;">
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$item->name}}</h3>
    <h5 style="text-align: center; width 300px; height: 150px; margin-top:10px; background-color: #2e3a3f; margin-left:10px; margin-right:10px;">{{$item->description}}</ht>
    <h3 style="text-align: center; width 300px; margin-top:10px;">{{$item->price}} PLN</h3>
    <form action="{{route('showDishes', $item->id)}}">
        <input style="display:block; margin-left:auto; margin-right:auto; margin-top:20px; width: 200px" type="submit" class="btn btn-primary" value="Details">
    </form>
</div>
@endforeach 
</div>
</div>
</body>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> --}}
@endsection
