@extends('layouts.master')

@section('content')
       <div class="row" id="table-hover-row">
                    <div class="col-12">
                        <div class="card">
                            
                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>Vertical Name</th>
                                            <th>Task Name</th>
                                            <th>Hours</th>
                                            <th>Description</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($reports as $report)

                                        <tr>
                                            <td>
                                            @if($report->vertical)
                                               {{$report->vertical->name}}
                                             @endif
                                            </td>

                                            <td>
                                            @if($report->task)
                                               {{$report->task->name}}
                                             @endif
                                            </td>

                                            <td>
                                                <span class="font-weight-bold">{{$report->hours}}</span>
                                                
                                            </td>

                                            <td>
                                                <span class="font-weight-bold">{{$report->description}}</span>
                                                
                                            </td>

                                           
                                        </tr>
                                        @endforeach
               
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Table head options end -->

            </div>
        </div>
    </div>
               
@endsection