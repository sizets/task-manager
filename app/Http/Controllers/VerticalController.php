<?php

namespace App\Http\Controllers;
use App\Vertical;
use Illuminate\Http\Request;

class VerticalController extends Controller
{
    public function save(Request $request){
        $data = [
            'name' => $request->input('name'),

            
            
            
            

        ];
        $vertical = Vertical::create($data);
        return redirect()->route('show.vertical');

       
    }

    public function show(){
        $verticals = Vertical::all();
        
        return view('showVertical', compact('verticals'));

    }

    public function edit(Request $request, $id ){
        $vertical = Vertical::find($id);
      return view('updateVertical', compact('vertical'));

       
    }
    public function update(Request $request, $id ){
        $data = Vertical::find($id);
        $data->name = $request->name;
        $data->save();

        return redirect()->route('show.vertical');
      

       
    } 
    public function delete(Request $request, $id ){
        $data = Vertical::destroy($id);
        
        return redirect()->route('show.vertical');

      

       
    } 


}
