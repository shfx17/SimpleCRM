@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Task - {{ $task->id }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>

                        <table id="tableTask">
                           <thead>
                              <tr>
                                 <th><center>Title</center></th> 
                                 <th><center>Description</center></th> 
                                 <th><center>Employee User</center></th> 
                                 <th><center>Adding User</center></th> 
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td><center> {{ $task->title }} </center></td> 
                                 <td><center> {{ $task->description }} </center></td>
                                 <td><center> {{ $task->employee_id }} </center></td>
                                 <td><center> {{ $task->user_id }} </center></td>
                              </tr>
                           </tbody>
                        </table>

                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
