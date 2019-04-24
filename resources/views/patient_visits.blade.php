@extends('layout')
@section('content')
<div class="container mb-5">
    <h3 class="main-h1 mb-5 mt-5">{{ $patient->first_name.' '.$patient->last_name }} - այցերը</h3>
    <select id="type" name="type">
        <option selected disabled>Ընտրել</option>
        <option value="All">Ամբողջը</option>
        <option value="Թերապիա" {{ $type=='Թերապիա' ? 'selected' : null }}>Թերապիա</option>
        <option value="Վիրաբուժություն" {{ $type=='Վիրաբուժություն' ? 'selected' : null }}>Վիրաբուժություն</option>
        <option value="Օրթոպեդիա" {{ $type=='Օրթոպեդիա' ? 'selected' : null }}>Օրթոպեդիա</option>
    </select><br><br><br>
    <input type="hidden" name="id" value="{{ $patient->id }}" id="patient_id">
    <table class="table visits-table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ախտորոշումը</th>
            <th scope="col">Տիպը</th>
            <th scope="col">Ատամը</th>
            <th scope="col">Գործողությունը</th>
            <th scope="col">Ամսաթիվը</th>
            <th scope="col">Արժեքը</th>
            <th scope="col">Վճարված է</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Նոր այց</th>
            <td><input type="text" id="diagnosis"></td>
            <td><select id="proc_type" name="proc_type">
                    <option value="Թերապիա">Թերապիա</option>
                    <option value="Վիրաբուժություն">Վիրաբուժություն</option>
                    <option value="Օրթոպեդիա">Օրթոպեդիա</option>
                </select>
            </td>
            <td><input type="text" id="tooth"><img src="{{ asset("pics/up.png") }}" class="tooth-up" onclick="changeFont('up')"><img src="{{ asset("pics/down.png") }}" class="tooth-down display-none" onclick="changeFont('down')"></td>
            <td><input type="text" id="procedure"></td>
            <td><input type="text" id="datepicker1"></td>
            <td><input type="text" id="price"></td>
            <td><input type="text" id="payed"></td>
            <td><button class="btn visit-button" id="add_visit">Ավելացնել</button></td>
        </tr>
        @foreach($visits as $i=>$visit)
            <tr class="one-visit-tr">
                <th scope="row" data-id="{{ $visit->id }}">{{ count($visits) - $i }}</th>
                <td><input type="text" name="diagnosis" value="{{ $visit->diagnosis }}"></td>
                <td><span>{{ $visit->type }}</span></td>
                <td><input type="text" name="tooth" value="{{ $visit->tooth }}"></td>
                <td><input type="text" name="procedure" value="{{ $visit->procedure }}"></td>
                <td><input type="text" name="date" value="{{ $visit->date }}"></td>
                <td><input type="text" name="price" value="{{ $visit->price }}"></td>
                <td><input type="text" name="payed" value="{{ $visit->payed }}"></td>
                <td><button data-toggle="modal" data-target="#delete-visit" class="btn delete-visit delete-button" data-id="{{ $visit->id }}">Ջնջել</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<div class="modal fade" id="delete-visit">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <p>Ջնջել այցելությունը?</p>
            </div>
            <input type="hidden" id="id-input">
            <div class="modal-footer">
                <a href="" id="delete-visit-a"><button class="btn modal-button">Այո</button></a>
                <button class="btn modal-button" data-dismiss="modal"> Ոչ </button>
            </div>
        </div>
    </div>
</div>
@endsection