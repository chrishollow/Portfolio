<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portfolio - Contacts</title>
        <meta charset="UTF-8" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>
    <?php include "menu.php";?>
        <div id="global">

            <main class="contactez-nous">
            <h1>Contactez-nous</h1>
            <p>Un problème, une question, envie de m'envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec moi !</p>
            <form action="/page-traitement-donnees" method="post">
            <div>
            <label for="nom">Votre nom</label>
            <input type="text" id="nom" name="nom" placeholder="Entrez votre nom" required>
            </div>
            <div>
            <label for="email">Votre e-mail</label>
            <input type="email" id="email" name="email" placeholder="Entrez votre adresse mail" required>
            </div>
            <div>
            <label for="sujet">Quel est le sujet de votre message ?</label>
            <select name="sujet" id="sujet" required>
            <option value="" disabled selected hidden>Choisissez le sujet de votre message</option>
            <option value="probleme-compte">Problème avec mon compte</option>
            <option value="question-produit">Question à propos de Christian</option>
            <option value="suivi-commande">Déclaration d'amour</option>
            <option value="autre">Autre...</option>
            </select>
            </div>
            <div>
            <label for="message">Votre message</label>
            <textarea id="message" name="message" placeholder="Bonjour, je vous contacte car...." required></textarea>
            </div>
            <div>
            <button type="submit">Envoyer mon message</button>
            </div>
            </form>
            </div>

        </div>
    </body>
</html>