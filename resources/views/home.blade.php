@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if(Session::has('task_added'))
                        <div class="alert alert-success card">
                            {{ Session::get('task_added') }}
                        </div>
                    @endif

                    @if(Session::has('task_changed'))
                        <div class="alert alert-success card">
                            {{ Session::get('task_changed') }}
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <center>
                    <table class="table table-hover">
                    <thead>
                        <tr>
                            <th><center>ID</center></th>
                            <th><center>Title</center></th> 
                            <th><center>Description</center></th> 
                            <th><center>Employee User</center></th> 
                            <th><center>Adding User</center></th> 
                        </tr>
                    </thead>
                    <tbody>
                        

                    @foreach($tasks as $task)
                        <tr>

                            @if ($task->user_id == Auth::user()->id)

                                <td><center><a href="{{ action('HomeController@edit', $task->id) }}"> {{ $task->id }} </a></center></td>
                            @else

                                <td><center> {{ $task->id }} </center></td>

                            @endif

                            <td><center> {{ $task->title }} </center></td> 
                            <td><center> {{ str_limit($task->description, $limit = 55) }} </center></td>
                            <td><center> {{ $task->employee_id }} </center></td>
                            <td><center> {{ $task->user_id }} </center></td>
                        </tr>
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
