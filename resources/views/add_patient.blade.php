@extends('layout')
@section('content')

<div class="container table-cont">
    <h2 class="mb-5 mt-5">Ավելացնել նոր քարտ</h2>
    <form autocomplete="off" method="post" action="{{ route('store_patient') }}">
            {{ csrf_field() }}
        <div class="tooth-div">
        <table class="table table-bordered">
            <tr>
                <td><input type="text" name="t_18_2"></td>
                <td><input type="text" name="t_17_2"></td>
                <td><input type="text" name="t_16_2"></td>
                <td><input type="text" name="t_15_2"></td>
                <td><input type="text" name="t_14_2"></td>
                <td><input type="text" name="t_13_2"></td>
                <td><input type="text" name="t_12_2"></td>
                <td><input type="text" name="t_11_2"></td>
                <td><input type="text" name="t_21_2"></td>
                <td><input type="text" name="t_22_2"></td>
                <td><input type="text" name="t_23_2"></td>
                <td><input type="text" name="t_24_2"></td>
                <td><input type="text" name="t_25_2"></td>
                <td><input type="text" name="t_26_2"></td>
                <td><input type="text" name="t_27_2"></td>
                <td><input type="text" name="t_28_2"></td>
            </tr>
            <tr>
                <td><input type="text" name="t_18_1"</td>
                <td><input type="text" name="t_17_1"></td>
                <td><input type="text" name="t_16_1"></td>
                <td><input type="text" name="t_15_1"></td>
                <td><input type="text" name="t_14_1"></td>
                <td><input type="text" name="t_13_1"></td>
                <td><input type="text" name="t_12_1"></td>
                <td><input type="text" name="t_11_1"></td>
                <td><input type="text" name="t_21_1"></td>
                <td><input type="text" name="t_22_1"></td>
                <td><input type="text" name="t_23_1"></td>
                <td><input type="text" name="t_24_1"></td>
                <td><input type="text" name="t_25_1"></td>
                <td><input type="text" name="t_26_1"></td>
                <td><input type="text" name="t_27_1"></td>
                <td><input type="text" name="t_28_1"></td>
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
                <td><input type="text" name="t_48_1"></td>
                <td><input type="text" name="t_47_1"></td>
                <td><input type="text" name="t_46_1"></td>
                <td><input type="text" name="t_45_1"></td>
                <td><input type="text" name="t_44_1"></td>
                <td><input type="text" name="t_43_1"></td>
                <td><input type="text" name="t_42_1"></td>
                <td><input type="text" name="t_41_1"></td>
                <td><input type="text" name="t_31_1"></td>
                <td><input type="text" name="t_32_1"></td>
                <td><input type="text" name="t_33_1"></td>
                <td><input type="text" name="t_34_1"></td>
                <td><input type="text" name="t_35_1"></td>
                <td><input type="text" name="t_36_1"></td>
                <td><input type="text" name="t_37_1"></td>
                <td><input type="text" name="t_38_1"></td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" name="t_48_2"></td>
                <td><input type="text" name="t_47_2"></td>
                <td><input type="text" name="t_46_2"></td>
                <td><input type="text" name="t_45_2"></td>
                <td><input type="text" name="t_44_2"></td>
                <td><input type="text" name="t_43_2"></td>
                <td><input type="text" name="t_42_2"></td>
                <td><input type="text" name="t_41_2"></td>
                <td><input type="text" name="t_31_2"></td>
                <td><input type="text" name="t_32_2"></td>
                <td><input type="text" name="t_33_2"></td>
                <td><input type="text" name="t_34_2"></td>
                <td><input type="text" name="t_35_2"></td>
                <td><input type="text" name="t_36_2"></td>
                <td><input type="text" name="t_37_2"></td>
                <td><input type="text" name="t_38_2"></td>
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
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Անուն" autocomplete="off" name="first_name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Ազգանուն" autocomplete="off" name="last_name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Հասցե" autocomplete="off" name="address">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Հեռախոսահամար" autocomplete="off" name="telephone">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Ծննդյան ամսաթիվը" autocomplete="off" name="birth_date">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn edit-button">Ավելացնել</button>
            </div>
        </div>
    </form>
</div>
@endsection