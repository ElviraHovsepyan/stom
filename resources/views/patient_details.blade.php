@extends('layout')
@section('content')
<div class="container table-cont">
    <h2 class="mb-5 mt-5">Ստոմատոլոգիական քարտ</h2>
        <form autocomplete="off" method="post" action="{{ route('edit_patient') }}">
            {{ csrf_field() }}
        <div class="tooth-div">
        <table class="table">
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
            <tr class="center-numbers">
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
            <tr class="center-numbers">
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
        </div>
        <div class="row rules-row mb-4 mt-4">
            <div class="col-md-4">
                <p>Բացակայող ատամ - O</p>
                <p>Ոչ ատամնափուտ. ախտ. - &#916;</p>
                <p>Ատամնափուտ - C</p>
                <p>Կակղանաբորբ - P</p>
            </div>
            <div class="col-md-4">
                <p>Շուրջատամնաբորբ - Pt</p>
                <p>Արմատ - R</p>
                <p>Իմպլանտ - I</p>
                <p>Ատամնալիցք - F</p>
            </div>
            <div class="col-md-4">
                <p>Ատամնափառ - DP</p>
                <p>Ատամնաքար - DC</p>
                <p>Արհեստական պսակ - Cr</p>
                <p>Ատամների շարժունություն՝ - I, II, III</p>
            </div>
        </div>
        <input type="hidden" name="id" value="{{ $patient->id }}" id="patient_id">
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
                <button type="submit" class="btn edit-button">Փոփոխել</button>
            </div>
        </div>
    </form>
</div>

<div class="container mb-5">
    <h3 class="main-h1 mb-5 mt-5">Այցելություններ</h3>
    <table class="table visits-table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Ախտորոշումը</th>
            <th scope="col">Ատամը</th>
            <th scope="col">Գործողությունը</th>
            <th scope="col">Ամսաթիվը</th>
            <th scope="col">Արժեքը</th>
            <th scope="col">Հաջորդ այցը</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <th scope="row">Նոր այց</th>
            <td><input type="text" id="diagnosis"></td>
            <td><input type="text" id="tooth"></td>
            <td><input type="text" id="procedure"></td>
            <td><input type="text" id="datepicker1"></td>
            <td><input type="text" id="price"></td>
            <td><input type="text" id="datepicker2"></td>
            <td><button class="btn visit-button" id="add_visit">Ավելացնել</button></td>
        </tr>
        @foreach($visits as $i=>$visit)
            <tr class="one-visit-tr">
                <th scope="row" data-id="{{ $visit->id }}">{{ count($visits) - $i }}</th>
                <td><input type="text" name="diagnosis" value="{{ $visit->diagnosis }}"></td>
                <td><input type="text" name="tooth" value="{{ $visit->tooth }}"></td>
                <td><input type="text" name="procedure" value="{{ $visit->procedure }}"></td>
                <td><input type="text" name="date" value="{{ $visit->date }}"></td>
                <td><input type="text" name="price" value="{{ $visit->price }}"></td>
                <td><input type="text" name="next_visit" value="{{ $visit->next_visit }}"></td>
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