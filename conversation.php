<?php 
require 'bdd.php';
session_start();

//connection a la bdd :
//recup des 15 dernier messages ( ils ne s'affichent pas encore bonhomme)
//faire un left join , pour lié l'id mentionner dans la table users et le users_id dans la table message pour faire un masta tableau et dire que c'est les meme.
$resultat = $bdd->query('SELECT * FROM messages 
LEFT JOIN users ON users.id=messages.users_id ORDER BY  messages.id DESC LIMIT 10');


while($donnee = $resultat->fetch())
{
	echo '<p id='.$donnee['id'].'>'.htmlspecialchars($donnee['pseudo']).' at '.$donnee['date_creation'].': '.htmlspecialchars($donnee['messages']).'</p>';
}
$resultat->closeCursor();


?>




