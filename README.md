# formulaireDeConnexion
 Formulaire d'inscription et de connexion pour un devoir à la NWS
# Étape 1
 J'ai tout d'abord créé une base de donnée ainsi qu'une table avec plusieurs valeurs dedans tel que le prénom, le nom ou encore le mot de passe par la suite j'ai relié sur mes fichier php en utilisant la méthode PDO, en mettant correctement le nom de l'host, le nom de la base de donnée, l'utilisateur ainsi que le mot de passe.

# Étape 2
 J'ai tout d'abord créé le formulaire d'inscription, puis lorsqu'on clique sur "s'inscrire" cela redirige vers la page "inscription.php" qui va executer le code pour se connecter à la base de donnée et ainsi     pouvoir enregistrer ces données dans celle-ci.
 # Étape 3
 J'ai ensuite créé le formulaire de connexion qui lorsqu'on clique sur "se connecter" cela redirige vers la page "connexion.php" qui va executer le code pour se connecter à la base de donnée et ainsi pouvoir lire les données enregistrer et les compararer avec celles qu'ont été enregistré dans le formulaire de connexion.
 Si tout est pareil, alors cela va afficher "Bonjour {PSEUDO}" de la personne.
 # Étape 4
 J'ai fini par créé un bouton pour se déconnecter facilement, j'ai créé une condition que lorsqu'on clique sur le bouton se déconnecter ça ecrase toute la session "créé" par l'utilisateur jusqu'à là et ça le ramènre vers la page de connexion.

 # Merci :)
