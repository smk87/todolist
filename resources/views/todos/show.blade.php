@extends('layouts.app')

@section('content')
    <a class="btn btn-secondary mb-2" href="/">Go Back</a>  
    <h1>{{$todo->text}}</h1>
     <div class="badge badge-info">{{$todo->due}}</div>
     <hr/>
     <p>{{$todo->body}}</p>
     <hr/>
     <br/><br/>
    <a href="/todo/{{$todo->id}}/edit" class="btn btn-warning">Edit</a>
    {!! Form::open(['action' => ['TodosController@destroy', $todo->id], 'method' => 'post', 'class' => 'float-right']) !!}
        {{Form::hidden('_method', 'DELETE')}}
        {{Form::bsSubmit('Delete',['class'=>'btn btn-danger'])}}
    {!! Form::close() !!}
@endsection