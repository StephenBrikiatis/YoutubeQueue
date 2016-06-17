function createButtons(JSONstring)
{
	var obj = JSON.parse(JSONstring);
	var comound = "#" + obj.items[0].id.videoId;
	console.log(comound);
	$(document).ready(function(){
		$(comound).click(function(){
			$.ajax({ 
				type: 'POST',
				url: 'test.php',
				data: ({videoId: obj.items[0].id.videoId}),
				success: function(response){
					console.log(response);
				}
		});
	
	});

});

}