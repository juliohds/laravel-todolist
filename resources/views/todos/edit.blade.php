@extends('layouts.app')

@section('content')
    <br>
    <a class="btn btn-default" href="/todo/{{$todo->id}}">Go Back</a>
    <hr>
    <h1>Edit Todo</h1>

    {{ Form::open(array('action' => ['TodosController@update', $todo->id], 'method' => 'POST')) }}
        {{ Form::bsText('text', $todo->text) }}
        {{ Form::bsTextArea('body', $todo->body) }}
        {{ Form::bsText('due', $todo->due) }}
        {{ Form::hidden('_method', 'PUT') }}
        {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection