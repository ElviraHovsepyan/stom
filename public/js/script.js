
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

// $('#datepicker2').datepicker({
//     dateFormat: "yy-mm-dd"
// });

$('#datepicker').on('change', function(){
	let date = $(this).val();
	window.location.href='http://stom.loc/notes/'+date;
});

$('#day_before').click(function(){
	let date = $('.date-h1').text();
	let param = 'day_before';
    window.location.href='http://stom.loc/notes/'+date+'/'+param;
});
$('#day_after').click(function(){
    let date = $('.date-h1').text();
    let param = 'day_after';
    window.location.href='http://stom.loc/notes/'+date+'/'+param;
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
        "lengthMenu": [[25, 50, -1], [25, 50, "All"]],
        "order": [[ 0, "desc" ]],
        columnDefs: [
            { targets: 'no-sort', orderable: false }
        ]
	});
    $('#example_filter input').addClass('form-control');
    // $('#example_filter label').html($('#example_filter label').html().replace('Search:', 'Որոնել'));
});

$('#add_visit').click(function () {
	let id = $('#patient_id').val();
	let diagnosis = $('#diagnosis').val();
	let proc_type = $('#proc_type').val();
	let tooth = $('#tooth').val();
	let procedure = $('#procedure').val();
	let date = $('#datepicker1').val();
	let price = $('#price').val();
	let payed = $('#payed').val();
	$.ajax({
		url: '/visit',
		type: 'post',
		data: {id:id, diagnosis:diagnosis,proc_type:proc_type,tooth:tooth,procedure:procedure,date:date,price:price,payed:payed}
	}).done(function (response) {
		if(response === 'success') window.location.reload();
    });
});

$('.one-visit-tr input').blur(function () {
	let id = $(this).parent().siblings('th').data('id');
	let val = $(this).val();
	let name = $(this).attr('name');
    $.ajax({
		url: '/edit_visit',
		type: 'post',
		data: {id:id, name:name, val:val}
    }).done(function (response) {
		console.log(response);
    });
});

$('.delete-visit').click(function () {
	let id = $(this).data('id');
	console.log(id);
	$('#delete-visit-a').attr('href','/delete_visit/'+id);
});

function changeFont(val) {
	if(val === 'up'){
		$('.tooth-up').addClass('display-none');
		$('.tooth-down').removeClass('display-none');
		$('#tooth').addClass('changeFont');
	} else {
        $('.tooth-down').addClass('display-none');
        $('.tooth-up').removeClass('display-none');
        $('#tooth').removeClass('changeFont');
    }
}

$('#type').change(function(){
	let proc_type = $('#type').val();
	let id = $('#patient_id').val();
	window.location.href = '/visits/'+id+'/'+proc_type;
});


