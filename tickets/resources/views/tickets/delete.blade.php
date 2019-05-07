@extends('layout.main')


@section('content')
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Delete the Ticket {{ $ticket->id}}</h1>
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


     <form action="" method="post">
     {{csrf_field()}}

     <div class="form_group">
        <lable for="summary">Summary</lable>
        <input type="text" id="summary" name="summary" class="form-control" value="{{ $ticket->summary}}" disabled/>    
     </div><br>

      <div class="form_group">
        <lable for="description">Description</lable>
        <input type="text" id="description" name="description" class="form-control" value="{{ $ticket->description}}" disabled/>    
      </div><br>

      <div class="form_group">
        <lable for="status">Status</lable>
        <input type="text" id="status" name="status" class="form-control" value="{{ $ticket->status}}" disabled/>    
      </div><br>
     
      <button class="btn btn-danger" type="submit">Delete</button>
      <a class="btn btn-secondary" href="/tickets" role="button">Back</a>
     </form> 
    </main>

@endsection