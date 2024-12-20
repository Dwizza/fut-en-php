# FUT Champions Ultimate Team - Backend

## Description
Ce projet consiste à développer la partie backend de la plateforme **FUT Champions Ultimate Team** en utilisant **PHP procédural** et **MySQLi**.  
L'objectif est de créer un gestionnaire de contenu robuste pour faciliter la gestion des différentes entités telles que :  
- Les joueurs  
- Les équipes  
- Les nationalités  
- Et d'autres entités liées  

Une attention particulière sera accordée à l'intégration d'une fonctionnalité d'internationalisation, permettant une utilisation multilingue de la plateforme.

---

## Fonctionnalités principales
1. **Gestion des joueurs**  
   - Ajout, modification, suppression et consultation des informations des joueurs.

2. **Gestion des équipes**  
   - Création, mise à jour et suppression des équipes.

3. **Gestion des nationalités**  
   - Ajout et gestion des nationalités associées aux joueurs.

4. **Internationalisation (I18N)**  
   - Support multilingue pour rendre la plateforme accessible dans différentes langues.

5. **Interface sécurisée**  
   - Validation des données côté serveur.  
   - Protection contre les injections SQL grâce à MySQLi.  

---

## Technologies utilisées
- **Backend** : PHP (procédural)  
- **Base de données** : MySQLi  

---

## Installation et configuration
### Prérequis
- Serveur web (Apache, Nginx, ou tout autre compatible avec PHP)
- PHP (version 7.4 ou ultérieure)
- MySQL (version 5.7 ou ultérieure)

### Étapes d'installation
1. Clonez le dépôt du projet :  
git clone https://github.com/Dwizza/fut-en-php cd FUT-Champions-Ultimate-Team-Backend

2. Configurez les fichiers nécessaires :  
- Renommez le fichier `config.example.php` en `config.php`.  
- Mettez à jour les informations de connexion à la base de données dans le fichier `config.php`.

3. Importez la base de données :  
- Importez le fichier `database.sql` dans votre gestionnaire de base de données.

4. Configurez votre serveur web pour pointer vers le dossier du projet.  

5. Accédez à la plateforme via votre navigateur web.  

---


---

## Auteur
Développé par **[Dwiza]**.  

---

## Licence
Ce projet est sous licence [CodeCraft].

