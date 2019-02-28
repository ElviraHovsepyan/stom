
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

$('#datepicker1').datepicker({
    dateFormat: "yy-mm-dd"
});

$('#datepicker2').datepicker({
    dateFormat: "yy-mm-dd"
});

$('#datepicker').on('change', function(){
	let date = $(this).val();
	window.location.href='http://stom.loc/notes/'+date;
});

$('.delete-button').click(function(){
	let text = $(this).data('id');
	let name = $(this).data('name');
	$('#name-span').text(name);
	$('#id-input').val(text);
});

$('#delete-patient').click(function(){
	let id = $('#id-input').val();
	$.ajax({
		url: '/delete',
		type: 'post',
		data: {id:id}
	}).done(function(response){
		if(response === 'success') window.location.reload();
	});
});

$(document).ready(function() {
    $('#example').DataTable({
        "lengthMenu": [[5,10, 25, 50, -1], [5,10, 25, 50, "All"]]
	});
} );

$('#add_visit').click(function () {
	let id = $('#patient_id').val();
	let diagnosis = $('#diagnosis').val();
	let tooth = $('#tooth').val();
	let procedure = $('#procedure').val();
	let date = $('#datepicker1').val();
	let price = $('#price').val();
	let next_visit = $('#datepicker2').val();
	$.ajax({
		url: '/visit',
		type: 'post',
		data: {id:id, diagnosis:diagnosis,tooth:tooth,procedure:procedure,date:date,price:price,next_visit:next_visit}
	}).done(function (response) {
		if(response === 'success') window.location.reload();
    });
});