@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>-----</h2>
    <form action="{{route('Details.Service.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="name">name:</label>
        <input type="text" class="form-control" id="name" value="{{$data->name}}"  placeholder="Enter name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="description">description:</label>
        <input type="text" class="form-control" id="description" value="{{$data->description}}"  placeholder="description" name="description">
        @if ($errors->has('description'))
        <span class="error">{{ $errors->first('description') }}</span>
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
