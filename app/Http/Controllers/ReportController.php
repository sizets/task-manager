<?php

namespace App\Http\Controllers;
use App\Report;
use App\Task;
use App\Vertical;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function index()
    {   
        $verticals = Vertical::all();
        $tasks = Task::all();

        
        return view('Reports.create',compact('verticals' , 'tasks'));
        
        
    }

    public function save(Request $request){
        
        $data = [
            'vertical_id' => $request->input('vertical_id'),
            'task_id' => $request->input('task_id'),
            'hours' => $request->input('hours'),
            'description' => $request->input('description'),



            
            
            
            

        ];
        
        $report = Report::create($data);
        return redirect()->route('report.show');

       
    }
}
