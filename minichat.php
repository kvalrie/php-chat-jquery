
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<meta charset="UTF-8">
	<title>Minichat</title>
</head>
<body>
	
	<noscript><iframe src="input_message.php"></iframe></noscript>
	<noscript><iframe src="conversation.php" height="300px" width="100%" name="iframe_conversation"></iframe></noscript>
	
	

	<form action="" method="post">
			
		<p>
			
			<label>Message:</label>
				<input type="text" name="message" id="message">

				<input type="submit" name="envoyer" id="submit">
		</p>
	</form>

	<div id="messages">

    </div>


	<a href="logout.php"><button class=button_index id="register">Log-out</button></a>


<script type="text/javascript" src='jquery.js' ></script>


<script>



$('#submit').click(function(e){
	 e.preventDefault(); 
	 let message = $('#message').val();
	 if (message != "") {
	 	$.ajax({
            url : "input_message.php", // on donne l'URL du fichier de traitement
            type : "POST", // la requête est de type POST
            data : {'message': message},
             // et on envoie nos données
        });
	 
	 }

});

	





let last_id ;
function refresh(){

	setTimeout(function(){
	  last_id = $('#messages p:first-of-type').attr('id')
	 	$.ajax({
            url : "refresh.php", // on donne l'URL du fichier de traitement
            type : 'POST',// la requête est de type POST
             // et on envoie nos données
            dataType: 'html', 
            data:{'last_id': last_id},

            success: function(result){$('#messages').append(result)},
            complete: console.log('ok')
        });

	 	

	}, 1000);
	 
};
refresh()

</script>
</body>
</html>
