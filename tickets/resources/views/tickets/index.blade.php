@extends('layout.main')


@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
  
@include('partials.alerts')


      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tickets</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
      <div class="table-responsive">
      <a class="btn btn-primary" href="/create" role="button">Add a new Ticket</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>Ticket</th>
              <th>Summary</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach($tickets as $ticket)
            <tr>
              <td>{{ $ticket->id }}</td>
              <td>{{ $ticket->summary }}</td>
              <td>{{ $ticket->status }}</td>
              <td>
                  <a href="/{{$ticket->id }}" class="btn btn-primary">Update</a>
                  <a href="/delete/{{$ticket->id }}" class="btn btn-danger">Delete</a>
              </td>
            </tr> 
          @endforeach          
          </tbody>
        </table>
      </div>
    </main>

@endsection