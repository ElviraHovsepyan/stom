@extends('layout')
@section('content')
<h2 class="mb-5 mt-5 text-center">Add New Item</h2>

<div class="container table-cont">
        <form autocomplete="off" method="post" action="{{ route('store_patient') }}">
            {{ csrf_field() }}
        <table class="table table-bordered">
            <tr>
                <td><input type="text" name="t_18_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_17_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_16_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_15_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_14_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_13_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_12_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_11_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_21_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_22_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_23_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_24_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_25_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_26_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_27_2" class="border-0 p-0"></td>
                <td><input type="text" name="t_28_2" class="border-0 p-0"></td>
            </tr>
            <tr>
                <td><input type="text" name="t_18_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_17_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_16_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_15_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_14_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_13_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_12_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_11_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_21_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_22_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_23_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_24_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_25_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_26_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_27_1" class="border-0 p-0"></td>
                <td><input type="text" name="t_28_1" class="border-0 p-0"></td>
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
                <td><input type="text" name="t_48-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_47-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_46-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_45-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_44-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_43-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_42-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_41-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_31-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_32-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_33-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_34-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_35-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_36-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_37-1" class="border-0 p-0"></td>
                <td><input type="text" name="t_38-1" class="border-0 p-0"></td>
            </tr>
            </tr>
            <tr>
                <td><input type="text" name="t_48-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_47-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_46-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_45-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_44-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_43-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_42-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_41-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_31-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_32-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_33-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_34-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_35-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_36-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_37-2" class="border-0 p-0"></td>
                <td><input type="text" name="t_38-2" class="border-0 p-0"></td>
            </tr>
        </table>

        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="First Name" autocomplete="off" name="first_name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Last Name" autocomplete="off" name="last_name">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Address" autocomplete="off" name="address">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Telephone" autocomplete="off" name="telephone">
            </div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <input type="text" class="form-control" placeholder="Birth Date" autocomplete="off" name="birth_date">
            </div>
        </div>
        <div class="form-group row">

        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-outline-success edit-button">Add</button>
            </div>
        </div>
    </form>
</div>
@endsection