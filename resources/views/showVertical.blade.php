
@extends('layouts.master')

@section('content')
      
       <div class="row" id="basic-table">
                    <div class="col-12">
        
                            <!-- Hoverable rows start -->
                <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            {{-- <th>Task Name</th> --}}
                                            <th>Vertical Name</th>
                                            {{-- <th>Users</th> --}}
                                            {{-- <th>Status</th> --}}
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($verticals as $vertical)

                                        <tr>
                                            <td>
                                                <span class="font-weight-bold">{{$vertical->name}}</span>
                                                
                                            </td>

                                           
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-sm dropdown-toggle hide-arrow" data-toggle="dropdown">
                                                        <i data-feather="more-vertical"></i>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="{{ route('edit.vertical' , $vertical) }}">
                                                            <i data-feather="edit-2" class="mr-50"></i>
                                                            <span>Edit</span>
                                                        </a>
                                                        <a class="dropdown-item" href="{{ route('delete.vertical' , $vertical) }}">
                                                            <i data-feather="trash" class="mr-50"></i>
                                                            <span>Delete</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforeach
               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
               
@endsection