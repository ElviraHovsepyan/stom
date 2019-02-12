<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Laravel</title>
        <link rel="stylesheet" type="text/css" href={{ asset("bootstrap/css/bootstrap.min.css") }}>
        <link rel="stylesheet" type="text/css" href={{ asset("jquery/jquery-ui.min.css") }}>
        <link rel="stylesheet" type="text/css" href={{ asset("css/style.css") }}>
    </head>
    <body>
        <div class="container">
            <h1 class="mt-4 mb-5 date-h1">{{ $date }}</h1>
            <div class="form-group text-right">
                <label for="datepicker"><img src={{ asset("pics/calendar-icon.png") }} class="icon-date"></label>
               <p><input type="text" id="datepicker" class="date-input"></p>
            </div>
        <table class="table table-sm table-striped table-hover notes-table">
  <tbody>
    <tr>
      <th scope="row" class="col-1">09:00</th>
      <td class="col-10"><input type="text" name="" class="border-0 w-100 px-3" value="{{$notes->t_09_00}}"></td>  
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
<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
<script type="text/javascript" src={{ asset("jquery/jquery-ui.min.js") }}></script>
<script type="text/javascript" src={{ asset("js/script.js") }}></script>
</body>
</html>
