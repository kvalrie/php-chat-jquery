<?php 
require 'bdd.php';
session_start();
$last_id = $_POST['last_id'];	
print_r($_POST);
$resultat = $bdd->query("SELECT * FROM messages 
LEFT JOIN users ON users.id=messages.users_id WHERE messages.id > '$last_id' ORDER BY  messages.id ASC ");


while($donnee = $resultat->fetch())
{
	echo '<p id='.$donnee['id'].'>'.htmlspecialchars($donnee['pseudo']).' at '.$donnee['date_creation'].': '.htmlspecialchars($donnee['messages']).'</p>';
}
$resultat->closeCursor();


?>
