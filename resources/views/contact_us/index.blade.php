<?php

 use App\Common;

 ?>
 @extends('layouts.app')

 @section('content')

  <!-- Bootstrap Boilerplate... -->

  <div class="panel-body">
    @if (count($contact_us) > 0)
    <table class="table table-striped task-table">
      <!-- Table Headings -->
      <thead>
        <tr>
          <th>No.</th>
          <th>Subject</th>
          <th>Salutation</th>
          <th>FullName</th>
          <th>Email</th>
          <th>ContactNo</th>
          <th>Feedback</th>
        </tr>
      </thead>

      <!-- Table Body -->
      <tbody>
      @foreach ($contact_us as $i => $contact_us)
      <tr>
        <td class="table-text">
          <div>{{ $i+1 }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->subject }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->salutation }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->fullName }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->email }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->contactNo }}</div>
        </td>
        <td class="table-text">
          <div>{{ $contact_us->feedback}}</div>
        </td>
        </tr>
        @endforeach
        </tbody>
      </table>
        @else
        <div>
          No records found
        </div>
        @endif
      </div>
    @endsection
