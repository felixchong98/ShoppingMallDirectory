<?php

 use App\Common;

 ?>
 @extends('layouts.app')

 @section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
    <table class="table table-striped task-table">
      <!-- Table Headings -->
      <thead>
        <tr>
          <th>Attribute</th>
          <th>Value</th>

        </tr>
      </thead>
      <!-- Table Body -->
      <tbody>
        <tr>
          <td>Code</td>
          <td>{{ $shop->code }}</td>
        </tr>
        <tr>
          <td>Name</td>
          <td>{{ $shop->name }}</td>
        </tr>
        <tr>
          <td>Category</td>
          <td>{{Common::$categories[$shop->category] }}</td>
        </tr>
        <tr>
          <td>Floor</td>
          <td>{{ Common::$floors[$shop->floor] }}</td>
        </tr>
        <tr>
          <td>Zone</td>
          <td>{{ Common::$zones[$shop->zone] }}</td>
        </tr>
        <tr>
          <td>About</td>
          <td>{!! nl2br($shop->about) !!}</td>
        </tr>
      </tbody>
    </table>
  </div>

 @endsection
