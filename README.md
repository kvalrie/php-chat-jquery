# php-chat-Jquery

A faire : bien integrer Ajax .
          rendre le chat visuellement sexy et dynamique .

## Workflow : 

	1 Maquette de l'app, reflexion sur les fonctions a implanter; ecriture du HTML/CSS.

	2 Conception et création de la base de donnée et de ses deux tables : Une table 'users' qui stockera principalement mot de passe et pseudo. Une table 'chat_messages' qui stockera les messages du chat. ! Relaiton one -> many sur users -> message ( Un user a plusieurs messages)

	3 Conception du script pour enregistrer un nouvel utilisateur; enregister pseudo et mot de passe de l'user dans la base de donnée. 

	4 Script pour que l'utilisateur puisse se log-in, se connecté.

consignes : 

Reprend le chat que tu as développé sans pouvoir utiliser du javascript. A présent: tu peux!

Comme tu l'as développé en amélioration progressive, ajoute une couche de javascript (via jQuery) pour améliorer l'expérience-utilisateur. Attention de bien préserver le fait que ton app continue de fonctionner pour les gens qui ont désactivé le javascript (les gens utilisant le browser Tor par exemple).

    Ne pas utiliser d'iframes si le javascript est disponible, uniquement de l'ajax
    Crée ce qu'on appelle parfois un "heartbeat" ou la technique du "long polling", càd, que toutes les X secondes, un appel est fait en ajax par le client vers le serveur, pour ajouter les éventuels nouveaux messages à la conversation, sans que l'utilisateur doive "rafraichir" manuellement la page.
    idem lorsque l'utilisateur ajoute un message: que cela ne rafraichisse pas toute la page, mais que cela injecte le message dans la conversation.

N'hésitez pas à vous mettre à plusieurs pour résoudre l'énigme du heartbeat/"long polling". Hint: une technique serait par exemple d'utiliser des identifiants uniques pour chaque message... Identifiant que vous pouvez utiliser dans la requête Ajax pour vérifier dans la base de données la présence de messages plus récents entre les personnes.


