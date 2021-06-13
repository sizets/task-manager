<?php

namespace App\Http\Controllers;
use App\Task;
use App\Vertical;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {   
        $verticals = Vertical::all();
        
        return view('Task',compact('verticals'));
    }


    public function save(Request $request){
        $data = [
            'name' => $request->input('name'),
            'vertical_id' => $request->input('vertical_id'),


            
            
            
            

        ];
        $task = Task::create($data);
        return redirect()->route('show.task');

       
    }

    
    public function show(){
        $tasks = Task::all();
        
        return view('showTask', compact('tasks'));

    }

    public function edit(Request $request, $id ){
        $verticals = Vertical::all();

        $task = Task::find($id);
      return view('updateTask', compact('task', 'verticals'));

       
    }

    public function update(Request $request, $id ){
        
        $data = Task::find($id);
        $data->name = $request->name;
        $data->vertical_id = $request->vertical_id;

        $data->save();

        return redirect()->route('show.task');
      

       
    } 
    public function delete(Request $request, $id ){
        $data = Task::destroy($id);
        
        return redirect()->route('show.task');

      

       
    } 


}
