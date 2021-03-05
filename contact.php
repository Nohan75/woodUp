<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/header-responsive.css">
    <link rel="stylesheet" href="css/footer-responsive.css">
    <script src="js/map.js"></script>
</head>
<body>

    <?php include "php/header.php"; ?>
    
    <div class="contact-container">

        <div class="banner">
            <div class="contact-question">
                <h1>NOUS CONTACTER</h1>
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
                    <input type="text" class="pre-tel" value="+33" disabled>
                    <input type="tel" placeholder="0123456789">
                </div>
                <div class="option-input">
                    <select name="option">
                        <option value="">--Choisissez un objet--</option>
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
            <!-- MAP GOOGLE -->
            <!-- <div style="width:400px;height:400px;background:#f1f1f1"></div> -->

            <div class="info-contact">
                <h1>COMMENT NOUS <br> CONTACTER ?</h1>
                <p class="text-contact">
                    
                </p>
                <div class="check">
                    <div class="tel-choice">
                        <div class="div-input">
                            <input type="radio" name="contact" id="tel" value="tel">
                            <label for="tel">NUMERO DE TELEPHONE</label>
                        </div>
                        
                        <input type="tel" id="show-tel" value="06.35.30.79.26" disabled hidden>
                    </div>
                    <div class="mail-choice">
                        <div class="div-input">
                            <input type="radio" name="contact" id="mail" value="mail">
                            <label for="mail">ADRESSE EMAIL</label>
                        </div>
                        <input type="email" id="show-mail" value="clement.lachaud@woodup-consulting.com" disabled hidden>
                    </div>
                    <div class="time-choice">
                        <div class="div-input">
                            <input type="radio" name="contact" id="openingtime" value="openingtime">
                            <label for="openingtime">HORAIRE D'OUVERTURE</label>
                        </div>
                        <div class="opening hidden">
                            <table>
                                <tr>
                                    <td>Lundi</td>
                                    <td align="right">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Mardi</td>
                                    <td align="right">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Mercredi</td>
                                    <td align="right">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Jeudi</td>
                                    <td align="right">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Vendredi</td>
                                    <td align="right">08:00 - 18:00</td>
                                </tr>
                                <tr>
                                    <td>Samedi</td>
                                    <td align="right">FERMÉ</td>
                                </tr>
                                <tr>
                                    <td>Dimanche</td>
                                    <td align="right">FERMÉ</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <?php include "php/footer.php" ?>

    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxOf3FFZCmcNyhGz432Fk9VEXNIS_8Qss&callback=initMap&libraries=&v=weekly"
      async
    ></script>
    <script src="js/contact.js"></script>
    <script src="js/app.js"></script>

</body>
</html>