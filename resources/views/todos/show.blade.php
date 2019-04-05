@extends('layouts.app')

@section('content')
    <a class="btn btn-default" href="/">Back</a>  
    <h1>{{$todo->text}}</h1>
     <div class="badge badge-info">{{$todo->due}}</div>
     <hr/>
@endsection