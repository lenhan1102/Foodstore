@extends('master')
@section('title')
	Register
@endsection

@section('content')
<div class="mdl-card mdl-shadow--2dp employer-form" action="#">
  <div class="mdl-card__title">
    <h2>Sign up</h2>
    <div class="mdl-card__subtitle">Please complete the form</div>
  </div>
  <div class="mdl-card__supporting-text">
    {!! Form::open(['method' => 'POST', 'url' => 'auth/register', 'class' => 'form']) !!}
      <div class="form__article">
		<h3><center>Personal data<center></h3>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<?php echo Form::text('name','', array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Name','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
		
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<?php echo Form::date('birthday','', array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Birthday','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
     </div>
	
	 <div class="form__article">
		<h3><center>Account<center></h3>
		<div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<?php echo Form::text('username','', array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Username','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
		<div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<?php echo Form::text('email','', array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Email','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            
			<?php echo Form::password('password', array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Password','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
		
        <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            
			<?php echo Form::password('password_confirmation',array('class' => 'mdl-textfield__input')); ?>
			<?php echo Form::label('Confirm-Password','', array('class' => 'mdl-textfield__label')); ?>
          </div>
        </div>
		
      </div>
	  <div class="mdl-grid">
          <div class="mdl-cell mdl-cell--12-col mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			@if (count($errors) > 0)
			<div class="alert alert-danger" style="color: red; li:{}">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
          </div>
      </div>
      <div class="form__action" style="margin-top: 0px;">
        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored" id="submit button sign" onclick="myFuncion()" data-upgraded=",MaterialButton"> SIGN UP </button>
      </div>
        
    {!! Form::close() !!}
  </div>
</div>
@endsection