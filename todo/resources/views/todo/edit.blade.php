@extends('todo.base')
@section('body')
    <h1>To Do</h1>
    <h3>Description</h3>
    <form action="{{route('updateTodo', ['id'=>$todos->id])}}" method = "post">
        @csrf
    <input type="hidden" name="todoId" value="{{$todos->id}}">
        <input type="text" name="description" id = "desc" value ="{{$todos->description}}">
        <h3> Status : </h3>
        <input type="hidden" value="0" name="status">
            @if ($todos->status == 1)
                <input type="checkbox" value = "1" name = "status" checked>Done<br><br>
            @else
                <input type="checkbox" value = "1" name = "status">Done<br><br>
            @endif

            <input type="submit" value = "Edit">
    </form>
@endsection