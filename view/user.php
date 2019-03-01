<!DOCTYPE html>
<html lang="es">
    <head>
    	<meta charset="UTF-8">
    	<title>miniapp</title>
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
    	<h1>Panel de usuario</h1>
    	<div id="content"></div>
    </body>
   <script>

	var response;
	$(document).ready(function(){
		getUserData.done(function(data){
			showUserData(data);
		}).fail(function(jqXHR, textStatus, errorThrown) {
		    console.log(textStatus + ': ' + errorThrown + ' - ' + jqXHR);
		});
	});

	var getUserData = $.ajax({
	    dataType: 'json',
	    url: '/?controller=ajaxuser&action=home'
	});

	function showUserData(data){
		eval(data.script);
	}
		
   </script>	
</html>