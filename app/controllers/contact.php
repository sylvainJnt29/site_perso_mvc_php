<?php

class Contact extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //echo "<h2>Je suis le controller index.</h2><hr>";
        $this->view->message = "<hr>Welcome to contact<hr>";
        // $this->view->aleatoire('contact/index');
    }

    /*   premiere tentative
    public function traitementMessage()
    {
        require "models/formulaire_contact_model.php";
        $x = new FormulaireContactModel;
        $this->view->checkMessage = true;
        $this->view->reponseFormulaire = $x->recupForm();
        $this->view->aleatoire("contact/index");
    }
*/

    public function traitementMessage()
    {
        session_start();



        if(empty($_POST['nom']) || empty($_POST['mail']) || empty($_POST['message'])) {
            $_SESSION['msg'] = " Un des champ requit est manquant !";
            header("Location:" . PATH . "contact");
            exit();
        }



        
        //Si ce n'est pas un mail valide ( coté serveur ), alors ...
        if(!filter_var($_POST['mail'],FILTER_VALIDATE_EMAIL)) {
            $_SESSION['msg'] = " Adresse mail non valide !";
            header("Location:" . PATH . "contact");
            exit();
        }


        if(!$_POST['g-recaptcha-response']) {
            $_SESSION['msg'] = " Veuillez résoudre le Captcha !";
            header("Location:" . PATH . "contact");
            exit();
        }




        //rajout le 13/04 20h50:
        $captcha =false;
        if(isset($_POST['g-recaptcha-response'])) { //si captcha existe
	    $captcha = $_POST['g-recaptcha-response'];

        if($captcha) {
        /*clé locale:
        $secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";*/

        $secretKey = "6Lcz8ugUAAAAAHsrzUONfX9uRuUoMwf5tgdnxQsm";

        $captchaUrl = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
        $response = file_get_contents($captchaUrl);
        //Transforme la réponse en tableau associatif.
        $responseKeys = json_decode($response, true);

        if(!$responseKeys['success']) {
            $_SESSION['msg'] = " Erreur détectée dans la procédure !";
            header("Location:" . PATH . "contact");
            exit();
        }
        }

        require "app/models/formulaire_contact_model.php";
        $x = new FormulaireContactModel;
        $this->view->checkMessage = true;
        $isOk= $x->recupForm($_POST['societe'], $_POST['nom'], $_POST['mail'], $_POST['message']);
        if($isOk) {
            $_SESSION['msg'] = " Votre message a bien été enregistré !";
        } else {
                        $_SESSION['msg'] = " Erreur de connexion à la base de donnée !";
        }
        header("Location:" . PATH . "contact");
       
    }
        }



    public function index() //false est utilisé pour utilisé la fonction sans parametre.
    {
        //  echo "<h3>Je suis le méthode index</h3><hr>";
        //echo $x;
        //echo $x;

        $this->view->aleatoire('contact/index');
        require "app/models/contact_model.php";
        $contact_model = new Contact_model();
    }
}
