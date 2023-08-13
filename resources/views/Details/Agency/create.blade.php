@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Agency.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">Agency_name</label>
        <input type="text" class="form-control" id="Agency_name" placeholder="Agency_name" name="Agency_name">
        @if ($errors->has('Agency_name'))
        <span class="error">{{ $errors->first('Agency_name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" placeholder="description" name="description">
        @if ($errors->has('description'))
        <span class="error">{{ $errors->first('description') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="image">image</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
