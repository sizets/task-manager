<?php

namespace App\Http\Controllers;
use App\Report;
use Illuminate\Http\Request;

class ShowReportController extends Controller
{
    public function index()
    {   
        $reports= report::all();
        
       
        
        return view('Reports.show',compact('reports'));
        
        
    }

    

       
    
}
