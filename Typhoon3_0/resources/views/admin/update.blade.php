@extends('layouts.admin_app')
@section('content')

    <div class="card card-info" style="background-color: #2a363f; width: 90%">
        <div class="card-header">
          <h3 class="card-title">Create dish</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form class="form-horizontal" action="{{ route('update-dish-submit', $dishes->id)}}" method="POST">
            @csrf
          <div class="card-body">
            <div class="form-group row">
              <label for="inputEmail3" class="col-sm-2 col-form-label ">{{ __('Name')}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="name" value="{{ $dishes->name }}" name="name" placeholder="Name">
              </div>
            </div>
            <div class="form-group row">
              <label for="description" class="col-sm-2 col-form-label">{{ ('Description')}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control " id="description" value="{{ $dishes->description }}" name="description" placeholder="Description" >
              </div>
            </div>
            <div class="form-group row">
              <label for="price" class="col-sm-2 col-form-label">{{ ('Price')}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control " id="price" value="{{ $dishes->price }}" name="price" placeholder="Price">
              </div>
            </div>
            <div class="form-group row">
              <label for="grams" class="col-sm-2 col-form-label">{{ ('Grams')}}</label>
              <div class="col-sm-10">
                <input type="text" class="form-control" id="grams" value="{{ $dishes->grams }}" name="grams" placeholder="Grams" >
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-info">{{ __('Update')}}</button>
          <!-- /.card-footer -->
              <a href="{{route('adminMenu')}}" class="btn btn-default float-right" style="color: #d8cfcc;">{{ ('Cancel')}}</a>
        </form>
          </div>
      </div>



@endsection