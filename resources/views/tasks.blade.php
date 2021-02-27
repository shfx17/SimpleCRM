@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">My tasks</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>
                    <table class="table table-hover">
                    @foreach($tasks as $task)

                        @if ($task->employee_id == Auth::user()->id)

                        <thead>
                            <tr>
                                <th scope="col"><center>ID</center></th>
                                <th scope="col"><center>Title</center></th> 
                                <th scope="col"><center>Description</center></th> 
                                <th scope="col"><center>Employee User</center></th> 
                                <th scope="col"><center>Adding User</center></th> 
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><center> {{ $task->id }} </center></td>
                                <td><center> {{ $task->title }} </center></td> 
                                <td><center> {{ $task->description }} </center></td>
                                <td><center> {{ $task->employee_id }} </center></td>
                                <td><center> {{ $task->user_id }} </center></td>
                              </tr>
                        @endif
                      

                    @endforeach
                        
                        </tbody>
                    </table>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
