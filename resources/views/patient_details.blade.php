@extends('layout')
@section('content')
<div class="container table-cont">
    <h2 class="mb-5 mt-5 text-center">Details</h2>
        <form autocomplete="off" method="post" action="{{ route('edit_patient') }}">
            {{ csrf_field() }}
        <table class="table table-bordered">
            <tr>
                <td><input type="text" name="t_18_2" value="{{ $patient['patient_tooth'][0]['value_2'] }}"></td>
                <td><input type="text" name="t_17_2" value="{{ $patient['patient_tooth'][1]['value_2'] }}"></td>
                <td><input type="text" name="t_16_2" value="{{ $patient['patient_tooth'][2]['value_2'] }}"></td>
                <td><input type="text" name="t_15_2" value="{{ $patient['patient_tooth'][3]['value_2'] }}"></td>
                <td><input type="text" name="t_14_2" value="{{ $patient['patient_tooth'][4]['value_2'] }}"></td>
                <td><input type="text" name="t_13_2" value="{{ $patient['patient_tooth'][5]['value_2'] }}"></td>
                <td><input type="text" name="t_12_2" value="{{ $patient['patient_tooth'][6]['value_2'] }}"></td>
                <td><input type="text" name="t_11_2" value="{{ $patient['patient_tooth'][7]['value_2'] }}"></td>
                <td><input type="text" name="t_21_2" value="{{ $patient['patient_tooth'][8]['value_2'] }}"></td>
                <td><input type="text" name="t_22_2" value="{{ $patient['patient_tooth'][9]['value_2'] }}"></td>
                <td><input type="text" name="t_23_2" value="{{ $patient['patient_tooth'][10]['value_2'] }}"></td>
                <td><input type="text" name="t_24_2" value="{{ $patient['patient_tooth'][11]['value_2'] }}"></td>
                <td><input type="text" name="t_25_2" value="{{ $patient['patient_tooth'][12]['value_2'] }}"></td>
                <td><input type="text" name="t_26_2" value="{{ $patient['patient_tooth'][13]['value_2'] }}"></td>
                <td><input type="text" name="t_27_2" value="{{ $patient['patient_tooth'][14]['value_2'] }}"></td>
                <td><input type="text" name="t_28_2" value="{{ $patient['patient_tooth'][15]['value_2'] }}"></td>
            </tr>
            <tr>
                <td><input type="text" name="t_18_1" value="{{ $patient['patient_tooth'][0]['value_1'] }}"></td>
                <td><input type="text" name="t_17_1" value="{{ $patient['patient_tooth'][1]['value_1'] }}"></td>
                <td><input type="text" name="t_16_1" value="{{ $patient['patient_tooth'][2]['value_1'] }}"></td>
                <td><input type="text" name="t_15_1" value="{{ $patient['patient_tooth'][3]['value_1'] }}"></td>
                <td><input type="text" name="t_14_1" value="{{ $patient['patient_tooth'][4]['value_1'] }}"></td>
                <td><input type="text" name="t_13_1" value="{{ $patient['patient_tooth'][5]['value_1'] }}"></td>
                <td><input type="text" name="t_12_1" value="{{ $patient['patient_tooth'][6]['value_1'] }}"></td>
                <td><input type="text" name="t_11_1" value="{{ $patient['patient_tooth'][7]['value_1'] }}"></td>
                <td><input type="text" name="t_21_1" value="{{ $patient['patient_tooth'][8]['value_1'] }}"></td>
                <td><input type="text" name="t_22_1" value="{{ $patient['patient_tooth'][9]['value_1'] }}"></td>
                <td><input type="text" name="t_23_1" value="{{ $patient['patient_tooth'][10]['value_1'] }}"></td>
                <td><input type="text" name="t_24_1" value="{{ $patient['patient_tooth'][11]['value_1'] }}"></td>
                <td><input type="text" name="t_25_1" value="{{ $patient['patient_tooth'][12]['value_1'] }}"></td>
                <td><input type="text" name="t_26_1" value="{{ $patient['patient_tooth'][13]['value_1'] }}"></td>
                <td><input type="text" name="t_27_1" value="{{ $patient['patient_tooth'][14]['value_1'] }}"></td>
                <td><input type="text" name="t_28_1" value="{{ $patient['patient_tooth'][15]['value_1'] }}"></td>
            </tr>
            <tr>
                <td>18</td>
                <td>17</td>
                <td>16</td>
                <td>15</td>
                <td>14</td>
                <td>13</td>
                <td>12</td>
                <td>11</td>
                <td>21</td>
                <td>22</td>
                <td>23</td>
                <td>24</td>
                <td>25</td>
                <td>26</td>
                <td>27</td>
                <td>28</td>
            </tr>
            </tr>
            <tr>
                <td>48</td>
                <td>47</td>
                <td>46</td>
                <td>45</td>
                <td>44</td>
                <td>43</td>
                <td>42</td>
                <td>41</td>
                <td>31</td>
                <td>32</td>
                <td>33</td>
                <td>34</td>
                <td>35</td>
                <td>36</td>
                <td>37</td>
                <td>38</td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" name="t_48_1" value="{{ $patient['patient_tooth'][16]['value_1'] }}"></td>
                <td><input type="text" name="t_47_1" value="{{ $patient['patient_tooth'][17]['value_1'] }}"></td>
                <td><input type="text" name="t_46_1" value="{{ $patient['patient_tooth'][18]['value_1'] }}"></td>
                <td><input type="text" name="t_45_1" value="{{ $patient['patient_tooth'][19]['value_1'] }}"></td>
                <td><input type="text" name="t_44_1" value="{{ $patient['patient_tooth'][20]['value_1'] }}"></td>
                <td><input type="text" name="t_43_1" value="{{ $patient['patient_tooth'][21]['value_1'] }}"></td>
                <td><input type="text" name="t_42_1" value="{{ $patient['patient_tooth'][22]['value_1'] }}"></td>
                <td><input type="text" name="t_41_1" value="{{ $patient['patient_tooth'][23]['value_1'] }}"></td>
                <td><input type="text" name="t_31_1" value="{{ $patient['patient_tooth'][24]['value_1'] }}"></td>
                <td><input type="text" name="t_32_1" value="{{ $patient['patient_tooth'][25]['value_1'] }}"></td>
                <td><input type="text" name="t_33_1" value="{{ $patient['patient_tooth'][26]['value_1'] }}"></td>
                <td><input type="text" name="t_34_1" value="{{ $patient['patient_tooth'][27]['value_1'] }}"></td>
                <td><input type="text" name="t_35_1" value="{{ $patient['patient_tooth'][28]['value_1'] }}"></td>
                <td><input type="text" name="t_36_1" value="{{ $patient['patient_tooth'][29]['value_1'] }}"></td>
                <td><input type="text" name="t_37_1" value="{{ $patient['patient_tooth'][30]['value_1'] }}"></td>
                <td><input type="text" name="t_38_1" value="{{ $patient['patient_tooth'][31]['value_1'] }}"></td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" name="t_48_2" value="{{ $patient['patient_tooth'][16]['value_2'] }}"></td>
                <td><input type="text" name="t_47_2" value="{{ $patient['patient_tooth'][17]['value_2'] }}"></td>
                <td><input type="text" name="t_46_2" value="{{ $patient['patient_tooth'][18]['value_2'] }}"></td>
                <td><input type="text" name="t_45_2" value="{{ $patient['patient_tooth'][19]['value_2'] }}"></td>
                <td><input type="text" name="t_44_2" value="{{ $patient['patient_tooth'][20]['value_2'] }}"></td>
                <td><input type="text" name="t_43_2" value="{{ $patient['patient_tooth'][21]['value_2'] }}"></td>
                <td><input type="text" name="t_42_2" value="{{ $patient['patient_tooth'][22]['value_2'] }}"></td>
                <td><input type="text" name="t_41_2" value="{{ $patient['patient_tooth'][23]['value_2'] }}"></td>
                <td><input type="text" name="t_31_2" value="{{ $patient['patient_tooth'][24]['value_2'] }}"></td>
                <td><input type="text" name="t_32_2" value="{{ $patient['patient_tooth'][25]['value_2'] }}"></td>
                <td><input type="text" name="t_33_2" value="{{ $patient['patient_tooth'][26]['value_2'] }}"></td>
                <td><input type="text" name="t_34_2" value="{{ $patient['patient_tooth'][27]['value_2'] }}"></td>
                <td><input type="text" name="t_35_2" value="{{ $patient['patient_tooth'][28]['value_2'] }}"></td>
                <td><input type="text" name="t_36_2" value="{{ $patient['patient_tooth'][29]['value_2'] }}"></td>
                <td><input type="text" name="t_37_2" value="{{ $patient['patient_tooth'][30]['value_2'] }}"></td>
                <td><input type="text" name="t_38_2" value="{{ $patient['patient_tooth'][31]['value_2'] }}"></td>
            </tr>
        </table>
        <input type="hidden" name="id" value="{{ $patient->id }}">
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" name="first_name" class="form-control" placeholder="First Name" autocomplete="off" value="{{ $patient->first_name }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ $patient->last_name }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" name="address" class="form-control" placeholder="Address" value="{{ $patient->address }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" name="telephone" class="form-control" placeholder="Telephone" value="{{ $patient->telephone }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Birth Date" autocomplete="off" name="birth_date" value="{{ $patient->birth_date }}">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-outline-success edit-button">Edit</button>
            </div>
        </div>
    </form>
</div>

<h3 class="text-center main-h1 mb-5 mt-5">Items list</h3>
<div class="container">
    <table class="table table-hover table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Reason</th>
            <th scope="col">Procedure</th>
            <th scope="col">Date</th>
            <th scope="col">Price</th>
            <th scope="col">Next Visit</th>
            <th scope="col">Add</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Add new</th>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><input type="text"></td>
            <td><button>Add</button></td>
        </tr>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>@mdo</td>
            <td>@mdo</td>
        </tr>
        </tbody>
    </table>
    <div class="row">
        <p>Paging</p>
    </div>
</div>
@endsection