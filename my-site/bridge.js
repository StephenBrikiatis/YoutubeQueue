    function getVariable(){
	var orginalRequest = new XMLHttpRequest();

	orginalRequest.onload = function() {
		alert(this.responseText);
	};

	orginalRequest.open("post", "testRead.php", true);

	orginalRequest.send();
	
	return(orginalRequest.responseText);
	}	