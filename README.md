Exercice 1 :

Créer un système de connexion / inscription.

Formulaire d'inscription comprenant ces champs :

- id
- nom
- prénom
- email
- date d'inscription
- rôle (utilisateur et admin)

Le formulaire de connexion doit être fait comme cela :

- email
- mot de passe

Une page dashboard qui permettra la gestion de compte rendu de réunion.

Sur la page dashboard il doit être présent grâce à la session le nom et prénom de l'utilisateur.

Si l'utilisateur à le rôle admin il doit pouvoir ajouter, modifier, supprimer un compte rendu.

Le rôle utilisateur pourra seulement lire un compte rendu.

Le formulaire d'ajout de compte rendu doit être comme cela :

- nom du compte rendu
- récapitulatif (grand texte)
- date du récapitulatif
- importance du compte rendu (importance basse, importance moyenne, haute importance) ces importances seront matérialiser par une couleur entourant le nom du compte rendu

PHP Natif.
Session et utilisation de PDO.

Pour le CSS utilisation d'un framework CSS au choix.

Optimisation possible via JS (framework's autorisés).
L'historique des comptes rendus doit être afficher sur la page principale du dashboard (juste les 10 derniers comptes rendus doivent être affichés.) les autres seront accessibles via le bouton "voir tous les comptes rendu".
