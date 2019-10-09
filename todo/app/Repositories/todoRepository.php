<?php 

namespace App\Repositories;

use App\todoModel;

class todoRepository implements todoInterface {
    public function create(string $description){
        $newtodo = new todoModel;
        $newtodo->description = $description;
        $newtodo->status = 0;
        $newtodo->save();
    }

    public function all(){
        return todoModel::all();
    }

    public function getById($id){
        return todoModel::findOrFail($id);
    }

    public function update($id, string $description ,$status){
        todoModel::findOrFail($id)->update(['description'=>$description , 'status'=>$status]);
    }
    
    public function delete($id){
        $newkomentar = todoModel::find($id);
        $newkomentar->delete();
    }

    public function finished(){
        return todoModel::all()->where('status',1);
    }

    public function unfinished(){
        return todoModel::all()->where('status',0);
    }
}

?>