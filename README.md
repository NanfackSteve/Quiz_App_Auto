# **Quiz_App_Auto**

Une application web interactive pour tester vos connaissances grâce à des questions basées sur des images. L'utilisateur peut répondre à des questions, obtenir un score, et consulter son résultat.

## 🚀 **Fonctionnalités**

- Affichage aléatoire d'images pour chaque question.
- Proposition de réponses avec une option correcte toujours incluse.
- Calcul automatique des scores basé sur la justesse des réponses.
- Affichage des résultats finaux avec un tableau des scores par question.
- Personnalisation avec le nom de l'utilisateur.

## 🛠️ **Technologies utilisées**

- **Frontend :**
  - HTML5 / BOOTSTRAP
  - JavaScript (jQuery) et Ajax 

- **Backend :**
  - PHP (pour fournir les données dynamiques via une API REST simple)
  - Données servies depuis `data.php`.

- **Autres :**
  - Utilisation de LocalStorage pour stocker temporairement les résultats et le nom de l'utilisateur.

## 📂 **Structure du projet**

```plaintext
.
├── index.html           # Page d'accueil
├── quiz.html            # Page du quiz
├── results.html         # Page des résultats
├── script.js            # Script principal de l'application
├── TP02/data.php        # fichier pour fournir les données
├── TP02/data            # Dossier contenant les images
├── README.md            # Documentation du projet

```
## 🖥️ Installation et utilisation

### 1. **Clonez le repository**
Commencez par cloner le repository GitHub sur votre machine locale :

```bash
git clone https://github.com/votre-nom-utilisateur/Quiz_App_Auto.git
cd Quiz_App_Auto
```
### 2. **configuration du serveur local**
* Assurez-vous d'avoir un serveur local (par exemple, XAMPP ou WampServer).
* Placez les fichiers du projet dans le répertoire htdocs ou équivalent.

### 3. **Lancement du serveur local**
Allez au dossier htdocs ou équivalent et lancez le serveur local.

### 4. **Utilisation de l'API des données**
* Les données pour le quiz sont servies depuis le fichier data.php.
* Assurez-vous que le serveur local est actif pour que les appels AJAX fonctionnent correctement.
* Assurez vous de placer le fichier data.php dans le dossier htdocs ou équivalent.
* Assurer vous de modifier si necessaire les chemins pour recuperer les donnees de l'api dans le fichier script.js. exemple : http://localhost/Quiz_App_Auto/TP02/data.php

### 5. **Accès au site web**

Accédez à http://localhost/Quiz_App_Auto/start.html depuis votre navigateur.


## 🤝 **Contribuer**
* Les contributions sont les bienvenues !
* Pour signaler des bugs ou proposer de nouvelles fonctionnalités :

* Ouvrez une issue sur GitHub.
* Proposez une pull request.

## 🎉 **Merci d'utiliser Quiz_App_Auto !**
Si vous avez des questions ou des suggestions, n'hésitez pas à les partager. 😊