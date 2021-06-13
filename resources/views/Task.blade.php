

@extends('layouts.master')

@section('content')
      
      <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Task</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('task.save') }}">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="exampleInputEmail1">Task Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Task Name">
                                                
                                            </div>

                                             <div class="form-group" >
                                           <label for="exampleInputEmail1">Vertical</label>
                                                <select  name="vertical_id" class="form-control">
                                                 @foreach($verticals as $vertical)
                                                               
                                                   <option value="{{$vertical->_id}}">{{$vertical->name}}</option>
                                                   
                                                  @endforeach
                                                 </select>

                                            </div>

                           
                                
                                

                               
                          


                                           
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                            </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
          
               
@endsection