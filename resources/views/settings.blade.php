@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Task</div>

                <div class="card-body">
                    @if(Session::has('name_changed'))
                        <div class="alert alert-success card">
                            {{ Session::get('name_changed') }}
                        </div>
                    @endif

                    @if(Session::has('email_changed'))
                        <div class="alert alert-success card">
                            {{ Session::get('email_changed') }}
                        </div>
                    @endif

                    @if(Session::has('password_changed'))
                        <div class="alert alert-success card">
                            {{ Session::get('password_changed') }}
                        </div>
                    @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('form_errors')

                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['PanelController@panelUpdateSettings', $user->id]]) !!}

                        <div class="mb-3">
                            {!! Form::label('name', 'User name:', ['class' =>'form-label']) !!}
                            {!! Form::text('name', null, ['class'=>'form-control']) !!}
                        </div>

                        {!! Form::submit('Change') !!}

                        {!! Form::close() !!}


                        <br />


                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['PanelController@panelUpdateEmailSettings', $user->id]]) !!}

                        <div class="mb-3">
                            {!! Form::label('email', 'Your email:', ['class' =>'form-label']) !!}
                            {!! Form::text('email', null, ['class'=>'form-control']) !!}
                        </div>

                        {!! Form::submit('Change') !!}

                        {!! Form::close() !!}

                        <br />


                        {!! Form::model($user, ['method'=>'PATCH', 'action'=>['PanelController@panelUpdatePasswordSettings', $user->id]]) !!}

                        <div class="mb-3">
                            {!! Form::label('password', 'Your password:', ['class' =>'form-label']) !!}
                            {!! Form::text('password', null, ['class'=>'form-control']) !!}
                        </div>

                        {!! Form::submit('Change') !!}

                        {!! Form::close() !!}
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
