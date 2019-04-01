<?php
use App\Common;
?>
@extends('layouts.app')

@section('content')

  <p><h2>CUSTOMER CARE / FEEDBACK</h2></p>
  <br>
  <p><h3>GET IN TOUCH WITH US</h3></p>
  <p>Every suggestion & feedback matters to us. Share your experience
  <br>and help us to improve so we can serve you better.</p>
  <br>
<!-- Bootstrap Boilerplate... -->

<div class="panel-body">
  <!-- New ContactUus Form -->
  {!! Form::model($contact_us, [
    'route' => ['contact_us.store'],
    'class' => 'form-horizontal'
    ]) !!}

<!-- Subject -->
<div class="form-group row">
  {!! Form::label('contact_us-subject', 'Subject', [
    'class' => 'control-label col-sm-3',
  ]) !!}
<div class="col-sm-9">
  {!! Form::text('subject', null, [
    'id' => 'division-subject',
    'class' => 'form-control',
    'maxlength' => 100,
  ]) !!}
</div>
</div>

<!-- salutation -->
<div class="form-group row">
  {!! Form::label('contact_us-salutation', 'Salutation', [
    'class' => 'control-label col-sm-3',
  ]) !!}
<div class="col-sm-9">
  {!! Form::select('salutation', Common::$salutation, null, [
    'class' => 'form-control',
    'placeholder' => '_Select_',
  ]) !!}
</div>
</div>

<!-- fullName -->
<div class="form-group row">
  {!! Form::label('contact_us-fullName', 'FullName', [
    'class' => 'control-label col-sm-3',
    ]) !!}
<div class="col-sm-9">
  {!! Form::text('fullName', null, [
    'id' => 'contact_us-fullName',
    'class' => 'form-control',
    'maxlength' => 100,
    ]) !!}
</div>
</div>

<!-- email -->
<div class="form-group row">
  {!! Form::label('contact_us-email', 'Email', [
    'class' => 'control-label col-sm-3',
    ]) !!}
<div class="col-sm-9">
  {!! Form::text('email', null, [
    'id' => 'contact_us-email',
    'class' => 'form-control',
    'maxlength' => 100,
  ]) !!}
</div>
</div>

<!-- contactNo -->
<div class="form-group row">
  {!! Form::label('contact_us-contactNo', 'ContactNo', [
    'class' => 'control-label col-sm-3',
    ]) !!}
<div class="col-sm-9">
  {!! Form::text('contactNo', null, [
    'id' => 'contact_us-contactNo',
    'class' => 'form-control',
    'maxlength' => 11,
  ]) !!}
</div>
</div>

<br>

<!-- feedback -->
<div class="form-group row">
  {!! Form::label('contact_us-feedback', 'Feedback', [
    'class' => 'control-label col-sm-3',
    ]) !!}
<div class="col-sm-9">
  {!! Form::textarea('feedback', null, [
    'id' => 'contact_us-feedback',
    'class' => 'form-control',
  ]) !!}
</div>
</div>
<br>
<br>
<!-- Submit Button -->
<div class="form-group row">
      <div class="col-sm-offset-3 col-sm-6">
      {!! Form::button('Submit', [
      'type' => 'submit',
      'class' => 'btn btn-primary', ]) !!}
      </div>
</div>

{!! Form::close() !!}
</div>
@endsection
