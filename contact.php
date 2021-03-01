<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="css/contact.css">
</head>
<body>

    <?php include "header.php"; ?>
    
    <div class="contact-container">

        <div class="banner">
            <div class="contact-question">
                <h1>QUI SOMMES NOUS ?</h1>
            </div>
            
        </div>
        <section id="form">
            <form align="center" action="">
                <div class="name-input">
                    <input type="text" placeholder="Votre prénom">
                    <input type="text" placeholder="Votre nom">
                </div>
                <div class="entreprise">
                    <input type="text" placeholder="Entreprise">
                </div>
                <div class="tel-input">
                    <input type="text" value="+33" disabled>
                    <input type="tel" placeholder="0123456789">
                </div>
                <div class="option-input">
                    <select name="option">
                        <option value="">--Please choose an option--</option>
                        <option value="">Choix 1</option>
                        <option value="">Choix 2</option>
                        <option value="">Choix 3</option>
                    </select>
                </div>
                <div class="area-msg">
                    <textarea name="message" id="msg-contact" cols="30" rows="10" placeholder="Votre message"></textarea>
                </div>
                <input type="submit" value="Envoyer">
            </form>
        </section>
        <section id="how-to-contact">
            <div class="card-contact">
                <img src="~/Desktop/logo.png" alt="">
            </div>
            <div class="info-contact">
                <h1>COMMENT NOUS CONTACTER ?</h1>
                <p class="text-contact"></p>
                <div class="check">
                    <div class="tel-choice">
                        <input type="radio" name="contact" id="tel" value="tel">
                        <label for="tel">NUMERO DE TELEPHONE</label>
                    </div>
                    <div class="mail-choice">
                        <input type="radio" name="contact" id="mail" value="mail">
                        <label for="mail">ADRESSE EMAIL</label>
                    </div>
                    <div class="time-choice">
                        <input type="radio" name="contact" id="openingtime" value="openingtime">
                        <label for="openingtime">HORAIRE D'OUVERTURE</label>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include "footer.php" ?>

</body>
</html>