@extends('layouts.app')

@section('main-content')

<div class="container">
    <h2>Vertical (basic) form</h2>
    <form action="{{route('Details.price.store')}}" method="post" enctype="multipart/form-data">
        @csrf
      <div class="form-group">
        <label for="text">price</label>
        <input type="text" class="form-control" id="price" placeholder="price" name="price">
        @if ($errors->has('price'))
        <span class="error">{{ $errors->first('price') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="month">month</label>
        <input type="number" class="form-control" id="month" placeholder="month" name="month">
        @if ($errors->has('month'))
        <span class="error">{{ $errors->first('month') }}</span>
    @endif
      </div>
      <div class="form-group">
        <label for="text1">text1</label>
        <input type="text" class="form-control" id="text1" placeholder="text1" name="text1">
        @if ($errors->has('text1'))
        <span class="error">{{ $errors->first('text1') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text2">text2</label>
        <input type="text" class="form-control" id="text2" placeholder="text2" name="text2">
        @if ($errors->has('text2'))
        <span class="error">{{ $errors->first('text2') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text3">text3</label>
        <input type="text" class="form-control" id="text3" placeholder="text3" name="text3">
        @if ($errors->has('text3'))
        <span class="error">{{ $errors->first('text3') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text4">text4</label>
        <input type="text" class="form-control" id="text4" placeholder="text4" name="text4">
        @if ($errors->has('text4'))
        <span class="error">{{ $errors->first('text4') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text5">text5</label>
        <input type="text" class="form-control" id="text5" placeholder="text5" name="text5">
        @if ($errors->has('text5'))
        <span class="error">{{ $errors->first('text5') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text6">text6</label>
        <input type="text6" class="form-control" id="text6" placeholder="text6" name="text6">
        @if ($errors->has('text6'))
        <span class="error">{{ $errors->first('text6') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text7">text7</label>
        <input type="text" class="form-control" id="text7" placeholder="text7" name="text7">
        @if ($errors->has('text7'))
        <span class="error">{{ $errors->first('text7') }}</span>
    @endif
      </div>

       <div class="form-group">
        <label for="text8">text8</label>
        <input type="text" class="form-control" id="text8" placeholder="text8" name="text8">
        @if ($errors->has('text8'))
        <span class="error">{{ $errors->first('text8') }}</span>
    @endif
      </div>

      
      <button type="submit" class="btn btn-success">Submit</button>
    </form>
  </div>


@endsection
