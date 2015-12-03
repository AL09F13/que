// JavaScript Document



$(document).ready(function(e) {
document.addEventListener("deviceready",function(){
	
	
	$("#btnconsulta"). on ("click", function(){
		
		alert ("preguntando...");
		pregunta();
		
		
		function pregunta()
	{
		datos="";
		$.ajax({
			type: "POST",
			url: "192.168.1.77/procesar.php",
			data: datos
			}).done(function(mensaje){
				alert (mensaje);
			});//done
	}
	
	});//pregunta
	
}); 
});

