# Site de e-commerce avec laravel

Description brève du projet de e-commerce développé avec Laravel.

## Fonctionnalités

- Gestion des utilisateurs (inscription, connexion, profil utilisateur)
- Catalogue de produits avec recherche et filtres
- Ajout de produits au panier
- etc.

## Prérequis

- PHP >= 7.4
- Composer
- Node.js(>=18.0) & npm(>=5) 
- MySQL 

## Installation

1. Clonez ce dépôt :
   git clone https://github.com/votre-utilisateur/votre-projet.git

2. Installez les dépendances PHP avec Composer :
  composer install

3. Copiez le fichier .env.example pour créer un nouveau fichier .env

4. Générez une nouvelle clé d'application Laravel :
   php artisan key:generate

5. Configurez votre base de données dans le fichier .env :
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=votre_base_de_donnees
  DB_USERNAME=votre_nom_utilisateur
  DB_PASSWORD=votre_mot_de_passe

6. Exécutez les migrations pour créer les tables de base de données :
php artisan migrate

7. Exécutez les commandes npm pour compiler les ressources front-end :
npm install
npm run build
npm run dev

9. Lancez le serveur de développement :
php artisan serve

10. Accédez à votre application dans votre navigateur à l'adresse `http://localhost:8000`.

#Récupération de la base de données :

1- Créez une nouvelle base de données en untilisant l'invite de commandes.

2- Exéutez la commande qui suit pouur restaurer la base de données du projet. 
mysql -u [nom_utilisateur] -p [nom_base_de_données] < backup.sql
Assurez-vous de remplacer [nom_utilisateur] par votre nom d'utilisateur MySQL et [nom_base_de_données] par le nom de la base de données dans laquelle vous souhaitez restaurer les données. Vous serez ensuite invité à saisir votre mot de passe MySQL.

3- Vérification de la restauration : Une fois la commande exécutée avec succès, vous pouvez vérifier que la restauration a été effectuée en vous connectant à votre serveur MySQL et en consultant les données de la base de données restaurée.


# Ressources complémentaires : 
  Cours : https://grafikart.fr/formations/laravel
  TP : https://cours.brosseau.ovh/cheatsheets/laravel/quick.html
