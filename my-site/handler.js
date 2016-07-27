function createButtons(JSONstring) // this function creates the search elements
{
	var obj = JSON.parse(JSONstring);
	
for(i = 0; i < obj.pageInfo.resultsPerPage; i++)
{	
	var compound = "#" + obj.items[i].id.videoId;
	var name = obj.items[i].id.videoId; //This element is needed for passing the data in a for loop
	console.log(compound);
	$(document).ready(function(){
		$(compound).click(function(){
			$.ajax({ 
				type: 'POST',
				url: 'writeFile.php',
				data: ({videoId: name}), //used down here
				success: function(response){
					console.log(response);
				}
		});
	
	});

});
}

}