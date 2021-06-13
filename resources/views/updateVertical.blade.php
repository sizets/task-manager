@extends('layouts.master')

@section('content')

<section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('update.vertical' , $vertical) }} ">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" value="{{$vertical->name}}">
                                                
                                            </div>
                                           
                                        
                                             <button  class="btn btn-primary">Update</button>

                                            </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                @endsection