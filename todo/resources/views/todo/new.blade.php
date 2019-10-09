@extends('todo.base')
@section('body')
    <h1>To Do</h1>
    <h3>Description : </h3>
    <form action="{{route('addTodo')}}" method="post">
        @csrf
        <input type="text" name="description" id="description">
        <input type="submit" value ="Add">   
    </form>
@endsection