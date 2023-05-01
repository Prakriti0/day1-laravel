<?php
namespace App\Http\Controllers;
use App\Models\ToDoList;
use Illuminate\Http\Request;

class logic extends Controller
{
    public function save(Request $req) {
        $data=ToDoList::all();
        $new = new ToDoList(); //modelname
        $new->title=$req->title;
        $new->description=$req->desc;
        if($new->save()){
            return view('/welcome');
        }
        else{
            return "not success";
        }
    }
    public function index(){
        $data = ToDoList::all(); //all()-> SELECT *from table_name
        return view('./Layout/table',['data'=>$data]);
    }

    public function edit($id){
        $data =  ToDoList::find($id); // find($id) = select *from model where('id'=$id)
        return view('welcome',['data'=>$data]);
    }

    public function update(Request $req) {
        $update= ToDoList::find($req->id);
        $update->title=$req->title;
        $update->description=$req->description;
        if($update->save()){
            return redirect('/table');
        }
        else
        {
            return "failed";
        }

    }
}
