$( document ).ready(function() {
	$("#agregar_usuario").click( function(){
		if ($("#agregar").hasClass("hide")){
			$("#agregar").removeClass("hide");
		}else{
			$("#agregar").addClass("hide");
		}
	
	});
});