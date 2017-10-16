$(document).ready(function(){
	
	$("#file").on("change", function(e)){
		var files = $(this)[0].files;
		
		if(files.length >= 2){
			$("#phototitle").text(files.length + " files");
		}
		else{
		var filename = e.target.value.split('\\').pop();
		$("#phototitle").text(filename);
		}
	}


});