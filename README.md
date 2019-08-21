# RESTAURANT - NEOWEB

Projet réalisé avec Symfony 4 / PHP 7.1.29

## Description

Le but est de permettre à l'utilisateur d'afficher les horaires d'un restaurant.

La page d'accueil (/public/index.php/restaurant/) liste les restaurants présents en base, en sélectionnant un restaurant on arrive sur la page qui présente ses horaires (/public/index.php/restaurant/view/{id_du_restaurant}).

J'ai donc créé deux tables :
- "restaurant" qui contient les Restaurants avec une clé primaire 'id' et un attribut 'name' qui représente son nom
- "horaire" qui contient les Horaires avec une clé primaire 'id', une clé étrangère 'restaurant_id', un attribut 'jour' et un attribut 'creneau'

Après avoir généré les models "Restaurant" et "Horaire" associés, j'ai créé le controller "RestaurantController" qui contient deux fonctions :
- index qui affiche la liste cliquable des restaurants dans la vue 'Restaurant/index.html.twig'
- view qui prend en paramètre l'id du restaurant et qui récupère tous les créneaux pour les trier par jour de la semaine, puis qui les met dans l'ordre de la journée avant de les afficher dans la vue 'Restaurant/view.html.twig'

## Tests

Un jeu de données est disponible dans 'src/DataFixtures/RestaurantFixtures.php'
