<?php
 use App\Common;

?>
 @extends('layouts.app')

 @section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
    <!-- New Shop Form -->
    {!! Form::model($shop, [
      'route' => ['shop.store'],
      'class' => 'form-horizontal'
    ]) !!}

      <!-- Code -->
      <div class="form-group row">
        {!! Form::label('shop-code', 'Code', [
          'class' => 'control-label col-sm-3',
        ]) !!}
        <div class="col-sm-9">
          {!! Form::text('code', null, [
            'id' => 'shop-code',
            'class' => 'form-control',
            'maxlength' => 30,
          ]) !!}
        </div>
      </div>

      <!-- Name -->
      <div class="form-group row">
        {!! Form::label('shop-name', 'Name', [
          'class' => 'control-label col-sm-3',
        ]) !!}
        <div class="col-sm-9">
          {!! Form::text('name', null, [
            'id' => 'shop-name',
            'class' => 'form-control',
            'maxlength' => 100,
          ]) !!}
        </div>
      </div>

      <!-- Category -->
      <div class="form-group row">
        {!! Form::label('shop-category', 'Category', [
          'class' => 'control-label col-sm-3',
        ]) !!}
        <div class="col-sm-9">
          {!! Form::select('category', Common::$categories, null, [
            'class' => 'form-control',
            'placeholder' => '-_Select Category_-',
          ]) !!}
        </div>
      </div>

      <!-- Floor -->
      <div class="form-group row">
        {!! Form::label('shop-floor', 'Floor', [
          'class' => 'control-label col-sm-3',
        ]) !!}
        <div class="col-sm-9">
          {!! Form::select('floor', Common::$floors, null, [
            'class' => 'form-control',
            'placeholder' => '-_Select Floor_-',
          ]) !!}
        </div>
      </div>

      <!-- Zone -->
      <div class="form-group row">
        {!! Form::label('shop-zone', 'Zone', [
          'class' => 'control-label col-sm-3', ]) !!}
        <div class="col-sm-9">
          {!! Form::select('zone', Common::$zones, null, [
            'class' => 'form-control',
            'placeholder' => '-_Select Zone_-', ]) !!}
        </div>
      </div>

      <!-- About -->
      <div class="form-group row">
        {!! Form::label('shop-about', 'About', [
          'class' => 'control-label col-sm-3',
        ]) !!}
        <div class="col-sm-9">
          {!! Form::textarea('about', null, [
            'id' => 'shop-about',
            'class' => 'form-control',
          ]) !!}
        </div>
      </div>

      <!-- Submit Button -->
      <div class="form-group row">
            <div class="col-sm-offset-3 col-sm-6">
            {!! Form::button('Save', [
            'type' => 'submit',
            'class' => 'btn btn-primary', ]) !!}
            </div>
      </div>
    {!! Form::close() !!}
  </div>
@endsection
