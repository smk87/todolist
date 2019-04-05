@extends('layouts.app')

@section('content')
    <h1>Create Todo</h1>

    <a href="/todo/{{$todo->id}}" class="btn btn-secondary mb-2">Go Back</a>
    {!! Form::open(['action' => ['TodosController@update', $todo->id], 'method' => 'post']) !!}
        {{Form::bsText('text', $todo->text)}}
        {{Form::bsTextArea('body', $todo->body)}}
        {{Form::bsText('due', $todo->due)}}
        {{Form::hidden('_method', 'PUT')}}
        {{Form::bsSubmit('Submit',['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection