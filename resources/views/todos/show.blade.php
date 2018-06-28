@extends('layouts.app')

@section('content')
<div class="card card-body bg-light col-md-4">
    <a href='/' class="btn btn-primary">Go Back</a>
    <hr>
    <h1 class="text-center"><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h1>
    <span class="badge badge-dager">{{$todo->due}}</span>
    <hr>
    <p>{{$todo->body}}</p>
    <br><br>
    <a href="" class="btn btn-warning">Edit</a><br>
    {{ Form::open(array('action' => ['TodosController@destroy', $todo->id], 'method' => 'POST')) }}
        {{ Form::hidden('_method', 'DELETE')}}
        {{ Form::bsSubmit('Delete',['class' => 'btn btn-danger form-control']) }}
    {{ Form::close() }}
</div>
</p>
@endsection