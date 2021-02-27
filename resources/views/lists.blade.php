@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Workers list</div>

                <div class="card-body">
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
                            <th><center>Imię i nazwisko</center></th>
                            <th><center>Email</center></th>
                        </tr>
                    </thead>
                    <tbody>
                        

                    @foreach($users as $user)
                        <tr>
                            <td><center> {{ $user->id }} </center></td>
                            <td><center> {{ $user->name }} </center></td>
                            <td><center> {{ $user->email }} </center></td>
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
