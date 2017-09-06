<?php
require 'bdd.php';
session_start();
//if (isset($_POST['envoyer'])) {

	$message= filter_var($_POST['message'], FILTER_SANITIZE_STRING);


	// Insertion du message à l'aide d'une requête préparée	 
$req = $bdd->prepare('INSERT INTO messages(messages, users_id) VALUES(?, ?)');
$req->execute(array($message, $_SESSION['id']));
$req->closeCursor();

	
//}
?>
