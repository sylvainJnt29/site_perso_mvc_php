<!--<?php echo $this->message ?>-->

<!--
<div id="mep">
<img src="public/images/construction.jpg" alt="panneau de construction" >
<h1>Section en cours de construction, pour me contacter, vous pouvez m'envoyer directement un mail !</h1>
</div>
-->

<div id="mep_formulaire">
    <div id="formulaire">
        <!-- <form action="formulaire_contact_model.php" method="get" id="form">-->

        <form action="<?= PATH ?>contact/traitementMessage" method="post" id="form">

            <fieldset>
                <legend>Formulaire de contact</legend>
                Société:
                <input type="text" name="societe" id="societe">
                Nom: *
                <input type="text" name="nom" id="nom" required>
                Adresse mail: *
                <input type="mail" name="mail" id="mail" required>
                Votre message: *
                <textarea name="message" id="" rows="20" required></textarea>
                <br>

                <!-- https://www.google.com/recaptcha/admin/create -->
                <!-- sitekey=côté client
                    secretKey=côté serveur
                    prendre le captcha2 et celui " je ne suis pas un robot "
                 -->
                 <!--clé locale:
                <div class="g-recaptcha" data-sitekey="6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI"></div>-->
                <div class="g-recaptcha" data-sitekey="6Lcz8ugUAAAAAFr3G3rJC4K6S1Wqqaf-CEOWoaGO"></div>

                <input type="submit" name="action" value="Envoyer" id="btnSubmit">

            </fieldset>
        </form>


    </div>
    <div id="reponseFormulaire">


        
        <?php
            session_start();
            if(isset($_SESSION['msg'])){

                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                
            }
        ?>
        

    </div>
</div>