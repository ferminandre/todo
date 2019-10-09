@extends('todo.base')
@section('body')

    <h1> To Do </h1>
    <h3> Description : </h3>
    <h4>{{$todos->description}}</h5>
    <h3> Status : </h3>
    @if ($todos->status == 1)
        <h4>Done</h4>
    @else
        <h4>On Progress</h4>
    @endif
    <button onclick="location.href = '{{route('todoIndex')}}';" id = buttonBack>Back</button>
@endsection