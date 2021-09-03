$(document).ready(function() {
	
	if( $('.has-datetimepicker').length ) 
	{
		$('.has-datetimepicker').datepicker();
	}
	
	if( $('.has-datepicker').length )
	{
		$('.has-datepicker').datetimepicker({format: 'YYYY-MM-DD'});
	} 

});