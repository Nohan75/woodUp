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
            .
            <h1>QUI SOMMES NOUS ?</h1>
        </div>
        <section id="form">
            <form action="">

            </form>
        </section>
        <section id="how-to-contact">
            <div class="card-contact">

            </div>
            <div class="info-contact">
                <h1>COMMENT NOUS CONTACTER ?</h1>
                <p class="text-contact"></p>
                <div class="check">
                    <input type="radio" name="contact" id="tel" value="tel">
                    <label for="tel">NUMERO DE TELEPHONE</label>
                    <input type="radio" name="contact" id="mail" value="mail">
                    <label for="mail">ADRESSE EMAIL</label>
                    <input type="radio" name="contact" id="openingtime" value="openingtime">
                    <label for="openingtime">HORAIRE D'OUVERTURE</label>
                </div>
            </div>
        </section>

    </div>

    <?php include "footer.php" ?>

</body>
</html>