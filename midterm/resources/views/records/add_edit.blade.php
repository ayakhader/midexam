@extends('app')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update User</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('records.update', $record->id) }}">
            @csrf
            @method('PATCH') 

            <div class="form-group">

                <label for="name">Name:</label>
                <input type="text" class="form-control" name="name" value={{ $record->name }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $record->email }} />
            </div>
         
            <div class="form-group">
              <label for="phone">Phone:</label>
              <input type="text" class="form-control" name="phone" value={{ $record->phone }}/>
            </div>
            <div class="form-group">
              <label for="record_date">Record_Date:</label>
              <input type="text" class="form-control" name="record_date" value={{ $record->record_data }}/>
            </div>
                              
            <button type="submit" class="btn btn-primary">Update User</button>
        </form>
    </div>
</div>
@endsection