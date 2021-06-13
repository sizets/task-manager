<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
class UserController extends Controller
{
    public function index()
    {   
       
        
        return view('User');
    }
    public function form()
    {   
       
        
        return view('userForm');
    }

    
    public function save(Request $request){
        
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'mobile' => $request->input('mobile'),
            'password' => Hash::make($request->newPassword)
            

            
            
            
            

        ];
       
        $user = User::create($data);
        return redirect()->route('show.user');

       
    }

    
    public function show(){
        $users = User::all();
        
        return view('showUser', compact('users'));

    }

    public function edit(Request $request, $id ){
        

        $user = User::find($id);
      return view('updateUser', compact('user'));

       
    }

    public function update(Request $request, $id ){
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->mobile = $request->mobile;

        

        $data->save();

        return redirect()->route('show.user');
      

       
    } 

    public function delete(Request $request, $id ){
        $data = User::destroy($id);
        
        return redirect()->route('show.user');

      

       
    } 

}
