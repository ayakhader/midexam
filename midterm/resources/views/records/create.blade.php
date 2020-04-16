@extends('app')

@section('content')
<div class="row">
 <div>
    <h1 class="display-3">Add User</h1>
    <div>
      <a href="{{ route('records.index')}}" class="fa fa-fw fa-globe">Add User</a>
      </div>   
  <div>


    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif


      <form method="post" action="{{ route('records.store') }}">
          @csrf
          <div class="form-group">    
              <label for="name">Name:</label>
              <input type="text" class="form-control" name="name"/>
          </div>
          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>
          <div class="form-group">
              <label for="record_date">Record_Date:</label>
              <input type="text" class="form-control" name="record_date"/>
          </div>
                              
          <button type="submit" class="fa fa-fw fa-globe">Add User</button>
      </form>
  </div>
</div>
</div>
@endsection