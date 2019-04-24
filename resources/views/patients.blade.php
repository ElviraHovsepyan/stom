@extends('layout')
@section('content')
    <div class="container">
    <h1 class="main-h1 mt-5" >Հիվանդներ</h1>
        <table class="table table-striped" id="example">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Անուն</th>
                <th scope="col">Ազգանուն</th>
                <th scope="col">Հեռախոսահամար</th>
                <th class="no-sort" scope="col">Այցեր</th>
                <th class="no-sort" scope="col">Մանրամասները</th>
                <th class="no-sort" scope="col">Ջնջել</th>
            </tr>
            </thead>
            <tbody>
            @foreach($patients as $i=>$patient)
                <tr>
                    <th scope="row">{{ $i+1 }}</th>
                    <td>{{ $patient->first_name }}</td>
                    <td>{{ $patient->last_name }}</td>
                    <td>{{ $patient->telephone }}</td>
                    <td><a href="{{ route('patient_visits',$patient->id) }}" class="view-button">Դիտել</a></td>
                    <td><a href="{{ route('patient_details',$patient->id) }}" class="view-button">Դիտել</a></td>
                    <td><button type="button" data-toggle="modal" data-target="#myModal" class="btn delete-button" data-id="{{ $patient->id }}" data-name="{{ $patient->first_name.' '.$patient->last_name }}">Ջնջել</button></td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <p>Ջնջել <span id="name-span"></span>  հիվանդի տվյալները?</p>
                </div>
                <input type="hidden" id="id-input">
                <div class="modal-footer">
                    <button class="btn modal-button" id="delete-patient">Այո</button>
                    <button class="btn modal-button" data-dismiss="modal"> Ոչ </button>
                </div>
            </div>
        </div>
    </div>
@endsection