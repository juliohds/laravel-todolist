@extends('layouts.app')

@section('content')
    <br><br><br>
    <h1>Create Todo</h1>

    {{ Form::open(array('action' => 'TodosController@store', 'method' => 'POST')) }}
        {{ Form::bsText('text') }}
        {{ Form::bsTextArea('body') }}
        {{ Form::bsText('due') }}
        {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
    {{ Form::close() }}
@endsection