<?php

 use App\Common;

 ?>
 @extends('layouts.app')

 @section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
    <!-- New Shop Form -->
    {!! Form::model($shop, [
      'route' => ['shop.update', $shop->id],
      'method' => 'put',
      'class' => 'form-horizontal'
    ]) !!}

    <!-- Code -->
    <div class="form-group row">
      {!! Form::label('shop-code', 'Code', [
        'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::text('code', $shop->code, [
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
        {!! Form::text('name', $shop->name, [
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
        {!! Form::select('category', Common::$categories, $shop->category, [
          'class' => 'form-control',
          'placeholder' => '- Select Category -',
        ]) !!}
      </div>
    </div>

    <!-- Floor -->
    <div class="form-group row">
      {!! Form::label('shop-floor', 'Floor', [
        'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::select('floor', Common::$floors, $shop->floor, [
          'class' => 'form-control',
          'placeholder' => '- Select Floor -',
        ]) !!}
      </div>
    </div>

    <!-- Zone -->
    <div class="form-group row">
      {!! Form::label('shop-zone', 'Zone', [
        'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::select('zone', Common::$zones, $shop->zone, [
          'class' => 'form-control',
          'placeholder' => '- Select Zone -',
        ]) !!}
      </div>
    </div>

    <!-- About -->
    <div class="form-group row">
      {!! Form::label('shop-about', 'About', [
        'class' => 'control-label col-sm-3',
      ]) !!}
      <div class="col-sm-9">
        {!! Form::textarea('about', $shop->about, [
          'id' => 'shop-about',
          'class' => 'form-control',
        ]) !!}
      </div>
    </div>

    <!-- Update Button -->
    <div class="form-group row">
      <div class="col-sm-offset-3 col-sm-6">
        {!! Form::button('Update', [
          'type' => 'submit',
          'class' => 'btn btn-primary',
        ]) !!}
      </div>
    </div>
  {!! Form::close() !!}
 </div>

@endsection
