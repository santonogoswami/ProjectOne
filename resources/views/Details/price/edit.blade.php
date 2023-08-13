@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.price.update', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="price">price:</label>
        <input type="text" class="form-control" id="price" value="{{$data->price}}"  placeholder="Enter price" name="price">
        @if ($errors->has('price'))
        <span class="error">{{ $errors->first('price') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="month">month:</label>
        <input type="text" class="form-control" id="month" value="{{$data->month}}"  placeholder="month" name="month">
        @if ($errors->has('month'))
        <span class="error">{{ $errors->first('month') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text1">text1:</label>
        <input type="text" class="form-control" id="text1" value="{{$data->text1}}"  placeholder="text1" name="text1">
        @if ($errors->has('text1'))
        <span class="error">{{ $errors->first('text1') }}</span>
    @endif
      </div>
    <div class="form-group">
        <label for="text2">text2:</label>
        <input type="text" class="form-control" id="text2" value="{{$data->text2}}"  placeholder="text2" name="text2">
        @if ($errors->has('text2'))
        <span class="error">{{ $errors->first('text2') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text3">text3:</label>
        <input type="text4" class="form-control" id="text3" value="{{$data->text3}}"  placeholder="text3" name="text3">
        @if ($errors->has('text3'))
        <span class="error">{{ $errors->first('text3') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text4">text4:</label>
        <input type="text" class="form-control" id="text4" value="{{$data->text4}}"  placeholder="text4" name="text4">
        @if ($errors->has('text'))
        <span class="error">{{ $errors->first('text4') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text5">text5:</label>
        <input type="text" class="form-control" id="text5" value="{{$data->text5}}"  placeholder="text5" name="text5">
        @if ($errors->has('text5'))
        <span class="error">{{ $errors->first('text5') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text6">text6:</label>
        <input type="text" class="form-control" id="text6" value="{{$data->text6}}"  placeholder="text6" name="text6">
        @if ($errors->has('text6'))
        <span class="error">{{ $errors->first('text6') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text7">text7:</label>
        <input type="text" class="form-control" id="text7" value="{{$data->text7}}"  placeholder="text7" name="text7">
        @if ($errors->has('text7'))
        <span class="error">{{ $errors->first('text7') }}</span>
    @endif
      </div>

          <div class="form-group">
        <label for="text8">text8:</label>
        <input type="text" class="form-control" id="text8" value="{{$data->text8}}"  placeholder="text8" name="text8">
        @if ($errors->has('text8'))
        <span class="error">{{ $errors->first('text8') }}</span>
    @endif
      </div>

      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
