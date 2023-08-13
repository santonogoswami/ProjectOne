@extends('layouts.app')

@section('main-content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"></div>
                <div class="card-body">
               <a href="{{url('Details/Contact/create')}}"> Add Education</a>
                   <br>
              <table class="table table-responsive" id="about">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>number</th>
                        <th>email</th>
                        <th>address</th>
                        <th>edit</th>
                        <th>delete</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($data as $d)
                     <tr>
                         <td>{{$d->number}}</td>
                         <td>{{$d->email}}</td>
                         <td>{{$d->address}}</td>
                       
                        <td>
                            <a href="{{ route('Details.Contact.edit', $d->id)}}" class="btm btn-sm btn-info">edit</a> </td>
                         <td>   <a href="{{ route('Details.Contact.delete', $d->id)}} "onclick="return confirm('Are you sure you want to delete this item?');" class="btm btn-sm btn-danger delete">delete</a>
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
