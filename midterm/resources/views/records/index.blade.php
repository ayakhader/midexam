@extends('app')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRUD App - Midterm Exam</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h1>CRUD app</h1>
        <div><i class="fa fa-fw fa-plus-circle"></i>
            <strong>Add User</strong>
            <a href="add_edit.html" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</a>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Sr#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th class="text-center">Record Date</th>
                        <th class="text-center" colspan = 2>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($records as $record)
                    <tr> <td>{{$record->sr}}</td>
                        <td>{{$record->name}}</td>
                        <td>{{$record->email}}</td>
                        <td>{{$record->phone}}</td>
                        <td>{{$record->record_date}}</td>
                        
                        <td><a href="{{ route('records.add_edit',$record->id)}}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><form action="{{ route('records.destroy', $record->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>