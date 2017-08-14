$(".addmore").on('click',function(){
  $('#regNo').autocomplete({
    source: function( request, response ) {
      $.ajax({
        url : 'Admin.php',
        dataType: "json",
        method: 'post',
      data: {
         name_startsWith: request.term,
         type: 'country_table',
         row_num : row
      },
       success: function( data ) {
         response( $.map( data, function( item ) {
          var code = item.split("|");
          return {
            label: code[1],
            value: code[1],
            data : item
          }
        }));
      }
      });
    },
            
  });
  
  
});

$('#regNo').autocomplete({
  source: function( request, response ) {
    $.ajax({
      url : 'Admin.php',
      dataType: "json",
      method: 'post',
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
    $('#name').val(names[1]);
    $('#program').val(names[2]);
   
    $('#datepicker').val(names[3]);
   
  }           
});