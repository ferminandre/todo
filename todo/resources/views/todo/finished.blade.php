@extends('todo.base')
@section('body')
<h1>To Do</h1>
<button onclick="location.href = '{{route('todoIndex')}}'">New Task</button>
<table border=1>
    <tr>
        <th>ID</th>
        <th>Description</th>
        <th>Action</th>
    </tr>

    @foreach($listTodos as $todo)
    <tr>
        <td>{{$todo->id}}</td>
        <td><a href="{{route('getById', ['id'=>$todo->id])}}">{{$todo->description}}</a></td>
        <td>
            <button onclick="location.href = '{{route('editTodo', ['id'=>$todo->id])}}';" id="buttonEdit">Edit</button>
            <button onclick="if (confirmDelete()) location.href = '{{route('deleteTodo', ['id'=>$todo->id])}}';" id="buttonDelete">Delete</button>
        </td>
    </tr>
    @endforeach
</table>
<script>
    function confirmDelete(){
        return confirm("Are you sure ?");
    }
</script>
@endsection