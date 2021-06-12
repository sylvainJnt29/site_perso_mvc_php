
<?php
class Moteur
{
    public function __construct()
    {
        //echo  "<h1>Je suis le moteur principal de l'application.</h1>";
        //Je récupère l'url
        $url = isset($_GET['url']) ? ($_GET['url']) : null;
        //echo "<hr>" . $url;

        //Je supprime le dernier slash
        $url = rtrim($url, '/');

        //J'explose l'url:
        $url = explode('/', $url);
        // dbg($url);
        //echo $url[0] . "<hr>"; //recupere le controller





        if (empty($url[0])) {

            require "app/controllers/index.php";

            $c = new Index();

            $c->index();

            return false;
        }
        //recuperer dynamiquement l'url
        $file = "app/controllers/" . $url[0] . ".php";
        if (file_exists($file)) {
            require $file;
        } else {
            ///throw new Exception("<h1>Cette page n'éxiste pas.</h1>"); =solution pas terrible

            //echo "<h1>Cette page n'existe pas.</h1>"; =deuxieme solution pas terrible
            //return false;


            require "app/controllers/erreur.php";
            new Erreur();
            //Arreter la requête:
            return false;
        }
        $c = new $url[0];

        if (isset($url[2])) {
            $c->{$url[1]}($url[2]);
        } else {

            if (isset($url[1])) {
                $c->{$url[1]}();
            } else {

                $c->index();
            }
        }
    }
}
