<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nous contacter</title>
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="css/style.css">
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
            <!-- MAP GOOGLE -->
            <div id="map" style="width:400px;height:400px"></div>

            <div class="info-contact">
                <h1>COMMENT NOUS <br> CONTACTER ?</h1>
                <p class="text-contact">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos libero culpa sequi vel quos corporis ex fugit sunt sed, consectetur hic odit animi laboriosam sapiente accusamus eius natus soluta illum aliquid iure nulla, eum quod rem quo. Dolorum ipsum optio sunt fuga ab culpa molestiae.
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
                        <table class="opening">
                            <thead align="center">
                                <td>Lundi</td>
                                <td>Mardi</td>
                                <td>Mercredi</td>
                                <td>Jeudi</td>
                                <td>Vendredi</td>
                                <td>Samedi</td>
                                <td>Dimanche</td>
                            </thead>
                            <tbody>
                                <tr align="center">
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                    <td>8h00<br>13h30</td>
                                </tr>
                                <tr align="center">
                                    <td>---</td>
                                    <td>---</td>
                                    <td>---</td>
                                    <td>---</td>
                                    <td>---</td>
                                    <td>---</td>
                                    <td>---</td>
                                </tr>
                                <tr align="center">
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                    <td>14h00<br>18h00</td>
                                </tr>
                            </tbody>
                        </table>
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

</body>
</html>