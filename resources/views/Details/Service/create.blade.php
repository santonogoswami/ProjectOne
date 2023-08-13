@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>-----</h2>
    <form action="{{route('Details.Service.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">name</label>
        <input type="text" class="form-control" id="name" placeholder="name" name="name">
        @if ($errors->has('name'))
        <span class="error">{{ $errors->first('name') }}</span>
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
        <label for="link">link</label>
        <input type="link" class="form-control" id="link" placeholder="link" name="link">
        @if ($errors->has('link'))
        <span class="error">{{ $errors->first('link') }}</span>
    @endif
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
