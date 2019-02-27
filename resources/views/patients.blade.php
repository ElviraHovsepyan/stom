@extends('layout')
@section('content')
    <h1 class="text-center main-h1 mb-5 mt-5" >Items list</h1>
    <div class="container">
        <table class="table table-hover table-striped" id="example">
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
            @foreach($patients as $i=>$patient)
                <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>{{ $patient->first_name }}</td>
                    <td>{{ $patient->last_name }}</td>
                    <td>{{ $patient->telephone }}</td>
                    <td><a href="{{ route('patient_details',$patient->id) }}">View</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#myModal" class="delete-button" data-id="{{ $patient->id }}" data-name="{{ $patient->first_name.' '.$patient->last_name }}">Delete</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    {{--<h4 class="modal-title">Modal Heading</h4>--}}
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <!-- Modal body -->
                <div class="modal-body">
                    <p>Delete patient <span id="name-span"></span> ?</p>
                </div>
                <input type="hidden" id="id-input">
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" id="delete-patient">Yes</button>
                    <button type="button" class="btn btn-success" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
@endsection