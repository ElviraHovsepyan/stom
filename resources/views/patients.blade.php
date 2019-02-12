@extends('layout')
@section('content')
    <h1 class="text-center main-h1 mb-5 mt-5">Items list</h1>
    <div class="container">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">First_name</th>
                <th scope="col">Last_name</th>
                <th scope="col">Telephone</th>
                <th scope="col">View</th>
                <th scope="col">Delete</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $patient)
            <tr>

                <th scope="row">1</th>
                <td>{{ $patient->first_name }}</td>
                <td>{{ $patient->last_name }}</td>
                <td>{{ $patient->telephone }}</td>
                <td><a href="{{ route('patient_details',$patient->id) }}">View</a></td>
                <td>{{ $patient->id }}Delete</td>

            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection