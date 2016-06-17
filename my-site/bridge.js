function reqListener(){
	console.log(this.responseText);
}

var orginalRequest = new XMLHttpRequest();

orginalRequest.onload = function() {
	alert(this.responseText);
};

orginalRequest.open("get", "testRead.php", true);

orginalRequest.send();