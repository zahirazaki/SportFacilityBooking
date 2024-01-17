@extends('master.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>

    <div class="table table-striped">
    <table class="centered-table">
        <tr>
            <td>Name</td>
            <td>Phone</td>
            <td>Email</td>
            <td>People</td>
            <td>Date</td>
            <td>Time</td>
            <td>Message</td>
            <td>Action</td>
        </tr>

        @foreach($booking as $booking)
        <tr>
            <td>{{ $booking->name }}</td>
            <td>{{ $booking->phone }}</td>
            <td>{{ $booking->email }}</td>
            <td>{{ $booking->people }}</td>
            <td>{{ $booking->date }}</td>
            <td>{{ $booking->time }}</td>
            <td>{{ $booking->message }}</td>
            <td>
            <a href="{{url("delete/".$booking->name)}}" class="btn btn-danger">Delete</a>
            <a href="{{url("edit/".$booking->name)}}" class="btn btn-success">Edit</a>
            </td>
        </tr>
        @endforeach



    </table>
    </div>

</body>
</html>

@endsection
