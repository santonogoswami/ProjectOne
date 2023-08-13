@extends('layouts.app')

@section('main-content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{route('Details.Features.create')}}"> Add Exprience</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>description</th>
                        <th>link</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->id}}</td>
                         <td>{{$d->name}}</td>
                         <td>{{$d->description}}</td>
                         <td>{{$d->link}}</td>
                      <td><a href="{{ route('Details.Features.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a>
                            <a href="{{ route('Details.Features.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
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
