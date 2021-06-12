<?php

class Realisations extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //echo "<h2>Je suis le controller index.</h2><hr>";
        $this->view->message = "<hr>Welcome to realisations index<hr>";
    }

    public function index() //false est utilisé pour utilisé la fonction sans parametre.
    {
        //  echo "<h3>Je suis le méthode index</h3><hr>";
        // echo $x;

        $this->view->aleatoire('realisations/index');

        //Recuperation du model et l'instancier
        require "app/models/realisations_model.php";
        $model = new Realisations_model();
    }
}
