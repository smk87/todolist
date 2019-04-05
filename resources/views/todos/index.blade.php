@extends('layouts.app')

@section('content')
<h1>Todos</h1>
@if (count($todos)>0)
    @foreach ($todos as $todo)
        <div class="card bg-faded mt-2 rounded">
            <div class="card-block">
            <h3><a href="todo/{{$todo->id}}">{{$todo->text}}  <span class="badge badge-info">{{$todo->due}}</span></a></h3>
            </div>
        </div>
    @endforeach    
@endif
@endsection