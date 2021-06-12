<?php
class Erreur  extends Controller
{
    public function __construct()
    {
        parent::__construct();
        echo "<h3>ERREUR 404!</h3><hr>";
    }
    public function index($x = false) //false est utilisé pour utilisé la fonction sans parametre.
    {
        //  echo "<h3>Je suis le méthode index</h3><hr>";
        echo $x;
    }
}
