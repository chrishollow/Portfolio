
<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Portfolio - Contact</title>
        <meta charset="UTF-8" />

        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    <body>

    <?php include "menu.php";?>

        <div class="title">
            <h1>Contactez-moi</h1>
        </div>

        <div class= "container">

            <div class="container_content">
            <div class="container_content_inner">

                <main class="contactez-nous">
                    <p>Un problème ? Une question ? Envie de m'envoyer un message d’amour ? N’hésitez pas à utiliser ce formulaire pour prendre contact avec moi !</p>
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
                </main>


            </div>
            </div> 

             <div class="container_outer_img">
             <div class="img-inner">
                    <a href="http://christian.webdev-cf2m.be/Christian_SOFIA/" target="_blank">
                    <img class ="sofiascreen" src="../images/murakamibear.webp" alt="Murakami" width="500">
                    </a>
            </div>
            </div>

            <div class="btns">
                <a href="./" class="glow-on-hover">Retour à la page d'accueil</a>
            </div>

            </div>


</body>
</html>