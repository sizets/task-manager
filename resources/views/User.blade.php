
@extends('layouts.master')

@section('content')
      
              
 <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Form</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('user.save') }}">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="name">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                                                
                                            </div>
                                            
                                             <div class="form-group" >
                                           <label for="email">email</label>
                                                <input type="email" class="form-control" name="email" placeholder="email ">
                                                
                                            </div>

                                             <div class="form-group" >
                                           <label for="mobile">mobile</label>
                                                <input type="number" class="form-control" name="mobile" placeholder="mobile ">
                                                
                                            </div>

                                             <div class="form-group" >
                                           <label for="password">password</label>
                                                <input type="password" class="form-control" name="password" placeholder="password ">
                                                
                                            </div>
                                           
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             

                                            </form>
                                </div>
                            </div>
                        </div>
                        

            </div>
        </div>
    </div>
          
               
@endsection