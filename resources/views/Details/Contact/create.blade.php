@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Contact.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="number">number</label>
        <input type="text" class="form-control" id="number" placeholder="number" name="number">
      </div>

      <div class="form-group">
        <label for="email">email</label>
        <input type="email" class="form-control" id="email" placeholder="email" name="email">
      </div>

      <div class="form-group">
        <label for="address">address</label>
        <input type="text" class="form-control" id="address" placeholder="address" name="address">
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
