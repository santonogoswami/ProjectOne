@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Contact.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="number">number:</label>
        <input type="text" class="form-control" id="number" value="{{$data->number}}"  placeholder="Enter number" name="number">
      </div>

      <div class="form-group">
        <label for="text">email:</label>
        <input type="text" class="form-control" id="email" value="{{$data->passing_year}}"  placeholder="Enter email" name="email">
      </div>

      <div class="form-group">
        <label for="address">address:</label>
        <input type="text" class="form-control" id="address" value="{{$data->address}}"  placeholder="Enter session" name="address">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
