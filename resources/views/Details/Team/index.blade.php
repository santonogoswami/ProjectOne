@extends('layouts.app')

@section('main-content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{route('Details.Team.create')}}"> Add slider</a>
                   <br>
              <table class="table table-responsive">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                        <th>image</th>
                          <th>designation</th>
                        <th>link</th>
                          <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->id}}</td>
                         <td>{{$d->name}}</td>
                       <td><img src="{{asset($d->image)}}" alt="" width="100px" height="100px"></td>
                          <td>{{$d->designation}}</td>
                         <td>{{$d->link}}</td>
                      <td><a href="{{ route('Details.Team.edit',$d->id)}}" class="btm btn-sm btn-info">edit</a> </td>
                        <td>  <a href="{{ route('Details.Team.delete',$d->id)}}" onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
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
