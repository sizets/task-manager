@extends('layouts.master')

@section('content')
      
                <!-- Basic Horizontal form layout section start -->
                <section id="basic-horizontal-layouts">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Vertical</h4>
                                </div>
                                <div class="card-body">
                                      <form  method="POST" action="{{ route('save') }}">
                                      @csrf
                                         <div class="form-group" >
                                           <label for="exampleInputEmail1">Name</label>
                                                <input type="text" class="form-control" name="name" placeholder="Enter name">
                                                
                                            </div>
                                           
                                             <button type="submit" class="btn btn-primary">Submit</button>
                                             

                                            </form>
                                
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Floating Label Form section end -->

          
               
@endsection