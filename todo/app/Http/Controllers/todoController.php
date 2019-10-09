<?php

namespace App\Http\Controllers;

use App\todoModel;
use Illuminate\Http\Request;
use App\Repositories\todoRepository;

class todoController extends Controller
{
    private $todoRepo;

    public function __construct(todoRepository $repo){
        $this->todoRepo = $repo;
    }

    public function index(){
        $index = $this->todoRepo->unfinished();
        return view('todo.index', ['listTodos' => $index]);
    }

    public function new(){
        return view('todo.new');
    }

    public function create(Request $request){
        $newtodo = new todoModel;
        $newtodo->description = $request->description;
        $newtodo->status = 0;
        $newtodo->save();
        return redirect(route('todoIndex'));
    }

    public function getById($id){
        $todo = $this->todoRepo->getById($id);
        return view('todo.detail', ['todos' => $todo]);
    }

    public function edit($id){
        $todo = $this->todoRepo->getById($id);
        return view('todo.edit', ['todos' => $todo]);
    }
    
    public function delete($id){
        $this->todoRepo->delete($id);
        return back();
    }

    public function finishedTodo(){
        $todo = $this->todoRepo->finished();
        return view('todo.finished', ['listTodos' => $todo]);
    }

    public function update(Request $request){
        $this->todoRepo->update($request->id, $request->description, $request->status);
        return redirect()->route('todoIndex');
    }
}
