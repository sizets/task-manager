
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
                                      <form  method="POST" action="{{ route('update.task' , $task) }} ">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$task->name}}">
                                                
                                            </div>

                                            

                                                     <div class="form-group" >
                                           <label for="exampleInputEmail1">Vertical Name</label>
                                                <select  name="vertical_id" class="form-control">
                                                 @foreach($verticals as $vertical)
                                                    @if($task->vertical_id == $vertical->_id)
                                                        <option value="{{$vertical->_id}}" selected="selected">{{$vertical->name}}</option>
                                                    @else
                                                        <option value="{{$vertical->_id}}">{{$vertical->name}}</option>
                                                    @endif
                                                  @endforeach
                                                 </select>

                                            </div>

                                        
                                             <button  class="btn btn-primary">Update</button>

                                            </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
          
               
@endsection