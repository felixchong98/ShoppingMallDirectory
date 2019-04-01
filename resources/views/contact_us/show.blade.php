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
          <td>Subject</td>
          <td>{{ $contact_us->subject }}</td>
        </tr>
        <tr>
          <td>Salutation</td>
          <td>{{Common::$salutation[$contact_us->salutation] }}</td>
        </tr>
        <tr>
          <td>FullName</td>
          <td>{{ $contact_us->fullName }}</td>
        </tr>
        <tr>
          <td>Email</td>
          <td>{{ $contact_us->email }}</td>
        </tr>
        <tr>
          <td>contactNo</td>
          <td>{{ $contact_us->contactNo }}</td>
        </tr>
        <tr>
          <td>Feedback</td>
          <td>{!! nl2br($contact_us->feedback) !!}</td>
        </tr>
      </tbody>
    </table>
  </div>

 @endsection
