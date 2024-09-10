# Chat Application + Website + AI ChatBot + Meeting Room

## Description

Ce projet est une application complète de chat avec un site web, un chatbot AI intégré, et une salle de réunion virtuelle. L'application est construite en utilisant PHP, MySQL, Bootstrap, et WebRTC, offrant des fonctionnalités de communication en temps réel et d'interaction utilisateur.

### Fonctionnalités principales :
- **Chat en temps réel** : Messagerie instantanée entre utilisateurs.
- **ChatBot AI** : Un chatbot intelligent qui assiste les utilisateurs dans diverses tâches.
- **Salle de réunion virtuelle** : Communication audio/vidéo basée sur WebRTC.
- **Interface utilisateur moderne** : Conçue avec Bootstrap pour un rendu réactif et agréable.
- **Gestion des utilisateurs** : Inscription, connexion, et gestion de session.
- **Stockage des messages** : Sauvegarde des discussions dans une base de données MySQL.

## Technologies utilisées
- **PHP** : Logique côté serveur et gestion des sessions.
- **MySQL** : Stockage des données (utilisateurs, messages, historique des réunions).
- **Bootstrap** : Mise en page réactive et design élégant.
- **WebRTC** : Intégration de la vidéoconférence pour les salles de réunion.
- **AI ChatBot** : Utilisation de l'intelligence artificielle pour les réponses automatiques et interactives.

## Installation

### Prérequis :
- PHP (version 7.4 ou supérieure)
- Serveur MySQL
- Composer (gestion des dépendances PHP)
- Serveur Apache/Nginx ou local (XAMPP, WAMP)

### Étapes d'installation :
1. Clonez le dépôt Git :
    ```bash
    git clone https://github.com/votre-utilisateur/chat-application.git
    cd chat-application
    ```

2. Configurez la base de données :
    - Créez une base de données MySQL.
    - Importez le fichier `database.sql` fourni pour initialiser la structure de la base de données.
    - Modifiez le fichier de configuration `config.php` pour connecter votre base de données MySQL.

3. Installez les dépendances :
    ```bash
    composer install
    ```

4. Lancez votre serveur local ou déployez sur un serveur web.

## Utilisation

### Chat
- Les utilisateurs peuvent s'inscrire, se connecter, et commencer à chatter en temps réel.

### ChatBot AI
- Le chatbot peut être activé dans la fenêtre de chat pour interagir avec les utilisateurs et fournir des réponses automatisées.

### Salle de réunion
- Les utilisateurs peuvent créer et rejoindre des salles de réunion pour des appels vidéo/audio en utilisant WebRTC.

## Contributions

Les contributions sont les bienvenues. Merci de créer des pull requests pour proposer des améliorations ou de signaler des problèmes via le système d'issues.

## Licence

Ce projet est sous licence MIT. Voir le fichier [LICENSE](./LICENSE) pour plus de détails.
