//get the JSON and then print out links
function createLinks(JSONString) {
	var obj = JSON.parse(JSONString);
	
	for(i = 0; i < obj.pageInfo.resultsPerPage; i++) {
		var image = document.createElement("IMG");
		image.setAttribute("src", obj.items[i].snippet.thumbnails.medium.url);
		image.setAttribute("width", obj.items[i].snippet.thumbnails.medium.width);
		image.setAttribute("height", obj.items[i].snippet.thumbnails.medium.height);
		document.body.appendChild(image);
	}
}