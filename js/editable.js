$( document ).ready(function() {
  $('#editableTable').SetEditable({
	  columnsEd: "0,1,2,3,4,5,6",
	  onEdit: function(columnsEd) {
		 // console.log("===edit=="+(this));
		var Id = columnsEd[0].childNodes[1].innerHTML;
        var Name = columnsEd[0].childNodes[3].innerHTML;
        var EmissionDate = columnsEd[0].childNodes[5].innerHTML;
        var RequestText = columnsEd[0].childNodes[7].innerHTML;
        var RequestReply = columnsEd[0].childNodes[9].innerHTML;
		var RequestStatus = columnsEd[0].childNodes[11].innerHTML;
		$.ajax({
			type: 'POST',			
			url : "action.php",	
			dataType: "json",					
			data: {id:Id, name:Name, EmissionDate:EmissionDate, text:RequestText, RequestReply:RequestReply, RequestStatus:RequestStatus, action:'edit'},			
			success: function (response) {
				if(response.status) {
					// show update message
				}						
			}
		});
	  },
	  onBeforeDelete: function(columnsEd) {
	  var Id = columnsEd[0].childNodes[1].innerHTML;
	  $.ajax({
			type: 'POST',			
			url : "action.php",
			dataType: "json",					
			data: {id:Id, action:'delete'},			
			success: function (response) {
				if(response.status) {
					// show delete message
				}			
			}
		});
	  },
	});
});