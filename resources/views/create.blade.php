@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Task</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif  

                    @include('form_errors')


                        {!! Form::open(['url'=>'home']) !!}

                        @include('form', ['buttonName'=>'Add task'])

                        {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
