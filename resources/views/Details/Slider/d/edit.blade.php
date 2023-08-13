@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.Slider.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="description">description</label>
        <input type="text" class="form-control" id="description" value="{{$data->description}}"  placeholder="Enter description" name="description">
        @if ($errors->has('description'))
        <span class="error">{{ $errors->first('description') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="long_description">long_description</label>
        <input type="text" class="form-control" id="long_description" value="{{$data->long_description}}"  placeholder="Enter long_description" name="long_description">
        @if ($errors->has('long_description'))
        <span class="error">{{ $errors->first('long_description') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="image">image:</label>
        <input type="file" class="form-control" id="image" placeholder="image" name="image">
        <img src="{{asset($data->image)}}" alt="" width="100px" height="100px">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>



@endsection
