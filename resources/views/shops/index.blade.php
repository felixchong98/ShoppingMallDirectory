<?php
use App\Common;
?>

@extends ('layouts.app')

@section('content')

  <!-- Bootstrap Boilerplate... -->
  <h1> Utar Mall Directory </h1>
  <div class="panel-body">
    @if (count($shops) > 0)
    <table class="table table-striped task-table" border="1">
      <!-- Table Headings -->
      <thead>
        <a href="{{ url('/shop/create') }}">Add</a>
        <br>
        <tr>
          <th>No.</th>
          <th>Code</th>
          <th>Name</th>
          <th>Category</th>
          <th>Floor</th>
          <th>Zone</th>
          <th>About</th>
          <th>Created</th>
          <th>Actions</th>
        </tr>
      </thead>

      <!-- Table Body -->
      <tbody>
        @foreach ($shops as $i => $shop)

        <tr>
          <td class="table-text">
            <div>{{ $i+1 }}</div>
          </td>
          <td class="table-text">
            <div>
              {!! link_to_route(
                'shop.show',
                $title = $shop->code,
                $parameters = [
                'id' => $shop->id,
                ]
              ) !!}
            </div>
          </td>
          <td class="table-text">
            <div>{{ $shop->name }}</div>
          </td>
          <td class="table-text">
            <div>{{  $shop->category }}</div>
          </td>
          <td class="table-text">
            <div>{{ Common::$floors[$shop->floor] }}</div>
          </td>
          <td class="table-text">
            <div>{{ Common::$zones[$shop->zone] }}</div>
          </td>
          <td class="table-text">
            <div>{{ $shop->about }}</div>
          </td>
          <td class="table-text">
            <div>{{ $shop->created_at }}</div>
          </td>
          <td class="table-text">
            <div>
              {!! link_to_route(
                'shop.edit',
                $title = 'Edit',
                $parameters = [
                'id' => $shop->id,
                ]
              ) !!}
              |
              <a href="{{ route('shop.delete', $shop->id) }}">Delete</a>
            </div>
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
