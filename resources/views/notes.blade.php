@extends('layout')
@section('content')
  <div class="container">
            <h1 class="mt-4 mb-5 date-h1 text-center"><img src="{{ asset("pics/left.png") }}" id="day_before">{{ $date }}<img src="{{ asset("pics/right.png") }}" id="day_after"></h1>
            <div class="form-group text-right">
                <label for="datepicker"><img src={{ asset("pics/calendar-icon.png") }} class="icon-date"></label>
               <p><input type="text" id="datepicker" class="date-input"></p>
            </div>
        <table class="table table-sm table-striped table-hover notes-table">
  <tbody class="notes-table">
    <tr>
      <th class="col-1">09:00</th>
      <td class="col-7"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_09_00}}"></td>
    </tr>
    <tr>
      <th scope="row">09:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_09_30}}"></td>    
    </tr>
    <tr>
      <th scope="row">10:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_10_00}}"></td>  
    </tr>
    <tr>
      <th scope="row">10:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_10_30}}"></td>    
    </tr>
    <tr>
      <th scope="row">11:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_11_00}}"></td>     
    </tr>
    <tr>
      <th scope="row">11:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_11_30}}"></td>     
    </tr>
    <tr>
      <th scope="row">12:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_12_00}}"></td>     
    </tr>
    <tr>
      <th scope="row">12:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_12_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">13:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_13_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">13:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_13_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">14:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_14_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">14:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_14_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">15:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_15_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">15:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_15_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">16:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_16_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">16:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_16_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">17:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_17_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">17:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_17_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">18:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_18_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">18:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_18_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">19:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_19_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">19:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_19_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">20:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_20_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">20:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_20_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">21:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_21_00}}"></td>   
    </tr>
    <tr>
      <th scope="row">21:30</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_21_30}}"></td>   
    </tr>
    <tr>
      <th scope="row">22:00</th>
      <td class="col-5"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_22_00}}"></td>   
    </tr>
  </tbody>
</table>
</div>
@endsection
