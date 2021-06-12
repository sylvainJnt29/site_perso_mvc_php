<?php
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //echo "<h2>Je suis le controller index.</h2><hr>";
        $this->view->message = "<hr>Welcome to index<hr>";
    }

    public function index() //false est utilisé pour utilisé la fonction sans parametre.
    {
        //  echo "<h3>Je suis le méthode index</h3><hr>";
        // echo $x;

        $this->view->aleatoire('index/index');

        //Recuperation du model et l'instancier
        require "app/models/index_model.php";
        $model = new Index_model();
    }
}
