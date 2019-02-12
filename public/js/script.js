
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

let date = $('.date-h1').text();

$('.notes-table input').blur(function(){
	let name = $(this).parent().siblings('th').text();
	let n  = name.replace(':','_');
	n = 't_'+n;
	let text = $(this).val();
	$.ajax({
		url: '/note',
		type: 'post',
		data: {text:text,name:n,date:date}
	}).done(function(response){
		console.log(response);
	});
});

$('#datepicker').datepicker({
	 dateFormat: "yy-mm-dd"
});

$('#datepicker').on('change', function(){
	let date = $(this).val();
	window.location.href='http://stom.loc/notes/'+date;
});