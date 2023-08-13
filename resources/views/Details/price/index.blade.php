@extends('layouts.app')

@section('main-content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{url('Details/price/create')}}"> Add</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>price</th>
                        <th>month</th>
                        <th>text1</th>
                        <th>text2</th>
                        <th>text3</th>
                        <th>text4</th>
                        <th>text5</th>
                        <th>text6</th>
                        <th>text7</th>
                        <th>text8</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->id}}</td>
                         <td>{{$d->price}}</td>
                         <td>{{$d->month}}</td>
                         <td>{{$d->text1}}</td>
                         <td>{{$d->text2}}</td>
                         <td>{{$d->text3}}</td>
                         <td>{{$d->text4}}</td>
                         <td>{{$d->text5}}</td>
                         <td>{{$d->text6}}</td>
                         <td>{{$d->text7}}</td>
                         <td>{{$d->text8}}</td>
                        <td><a href="{{ route('Details.price.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a> </td>
                         <td>     <a href="{{ route('Details.price.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
                        </td>

                     </tr>
                     @endforeach
                 </tbody>
              </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection