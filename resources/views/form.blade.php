<div class="mb-3">
	{!! Form::label('title', 'Title task:', ['class' =>'form-label']) !!}
	{!! Form::text('title', null, ['class'=>'form-control']) !!}
</div>

<div class="mb-3">
	{!! Form::label('description', 'Description task:', ['class' =>'form-label']) !!}
	{!! Form::textarea('description', null, ['class'=>'form-control']) !!}
</div>

{!! Form::hidden('status', 1) !!}

<div class="mb-3">
	{!! Form::label('description_user_id', 'Adding user', ['class' =>'form-label']) !!}
	{!! Form::text('user_id', Auth::user()->id, ['class'=>'form-control']) !!}
</div>

<div class="mb-3">
	{!! Form::label('description_employee_id', 'Employee user', ['class' =>'form-label']) !!}
	{!! Form::text('employee_id', null, ['class'=>'form-control']) !!}
</div>

{!! Form::submit($buttonName) !!}