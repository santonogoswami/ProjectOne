@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Slider.store')}}" method="post" enctype="multipart/form-data">
        @csrf

      <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" placeholder="description" name="description">
        @if ($errors->has('description'))
        <span class="error">{{ $errors->first('description') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="long_description">long_description:</label>
        <input type="text" class="form-control" id="long_description" placeholder="long_description" name="long_description">
        @if ($errors->has('long_description'))
        <span class="error">{{ $errors->first('long_description') }}</span>
    @endif

      </div>
      <div class="form-group">
        <label for="image">image:</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
