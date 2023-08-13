@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>edit slider</h2>
    <form action="{{route('Details.Team.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="name">name</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter description" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="image">image</label>
        <input type="file" class="form-control" id="image" value="{{$data->image}}"  placeholder="Enter image" name="image">
        @if ($errors->has('image'))
        <span class="error">{{ $errors->first('image') }}</span>
    @endif
      </div>

        <div class="form-group">
        <label for="designation">designation</label>
        <input type="text" class="form-control" id="designation" value="{{$data->designation}}"  placeholder="Enter designation" name="designation">
        @if ($errors->has('designation'))
        <span class="error">{{ $errors->first('designation') }}</span>
    @endif
      </div>
      
      <div class="form-group">
        <label for="link">link:</label>
        <input type="link" class="form-control" id="link" value="{{$data->link}}"  placeholder="link" name="link">
        @if ($errors->has('link'))
        <span class="error">{{ $errors->first('link') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
