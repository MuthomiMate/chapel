<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="http://code.jquery.com//jquery-ui-1.10.3.custom.min.css" />
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>	
<script src="http://code.jquery.com//jquery-ui-1.10.3.custom.min.js"></script>
<script type="text/javascript">
	$('#countryname_1').autocomplete({
	source: function( request, response ) {
  		$.ajax({
  			url : 'ajax.php',
  			dataType: "json",
			data: {
			   name_startsWith: request.term,
			   type: 'country_table',
			   row_num : 1
			},
			 success: function( data ) {
				 response( $.map( data, function( item ) {
				 	var code = item.split("|");
					return {
						label: code[0],
						value: code[0],
						data : item
					}
				}));
			}
  		});
  	},
  	autoFocus: true,	      	
  	minLength: 0,
  	select: function( event, ui ) {
		var names = ui.item.data.split("|");						
		$('#country_no_1').val(names[1]);
		$('#phone_code_1').val(names[2]);
		$('#country_code_1').val(names[3]);
	}		      	
});
</script>
</head>

<body>
 <form action="index.php" name="students" method="post" id="students">
    <input type="text" name="countryname[]" id="countryname_1" class="ui-autocomplete-input">
    <input type="text" name="country_no[]" id="country_no_1" class="ui-autocomplete-input">
    <input type="text" name="phone_code[]" id="phone_code_1" class="ui-autocomplete-input">
    <input type="text" name="country_code[]" id="country_code_1" class="ui-autocomplete-input">
 </form>

</body>
</html>