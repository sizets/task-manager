@extends('layouts.master')

@section('content')
        <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Report</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('report.save') }}">
                                      @csrf
                                         
                                             <div class="form-group" >
                                           <label for="vertical ">Vertical</label>
                                                <select  name="vertical_id" class="form-control">
                                                 @foreach($verticals as $vertical)
                                                               
                                                   <option value="{{$vertical->_id}}">{{$vertical->name}}</option>
                                                   
                                                  @endforeach
                                                 </select>

                                            </div>

                                            
                                             <div class="form-group" >
                                           <label for="task">Task</label>
                                                <select  name="task_id" class="form-control">
                                                 @foreach($tasks as $task)
                                                               
                                                   <option value="{{$task->_id}}">{{$task->name}}</option>
                                                   
                                                  @endforeach
                                                 </select>

                                            </div>

                                            <div class="form-group" >
                                           <label for="hours"> Number of Hours</label>
                                                <input type="number" class="form-control" name="hours" placeholder="Hours">
                                                
                                            </div>

                                            
                                            <div class="form-group" >
                                           <label for="description">Description</label>
                                                <input type="text" class="form-control" name="description" placeholder="Description">
                                                
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