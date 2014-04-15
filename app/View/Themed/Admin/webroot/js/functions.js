$(function(){
	if($('.alert').is(":visible")){
		setTimeout(function(){
			$('.alert').slideUp('slow');
		},3000);
	}

	$('.date').datepicker({'language':'pt-BR', format: 'dd/mm/yyyy'});
});