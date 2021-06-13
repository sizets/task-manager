@extends('layouts.master')

@section('content')
      
              
  <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Update Form</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('update.user' , $user) }}">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                                
                                            </div>
                                            
                                             <div class="form-group" >
                                           <label for="email">email</label>
                                                <input type="email" class="form-control" name="email" value="{{$user->email}}">
                                                
                                            </div>

                                             <div class="form-group" >
                                           <label for="mobile">mobile</label>
                                                <input type="number" class="form-control" name="mobile" value="{{$user->mobile}}">
                                                
                                            </div>

                                            

                                    
                                           
                                             <button type="submit" class="btn btn-primary">Update</button>
                                             

                                            </form>
                                </div>
                            </div>
                        </div>
                        

            </div>
        </div>
    </div>
          
               
@endsection