<?php
class About extends Controller
{
    public function __construct()
    {
        parent::__construct();
        //echo "<h2>Je suis le controller index.</h2><hr>";
        $this->view->message = "<hr>Welcome to about<hr>";
        //$this->view->aleatoire('about/index');
    }

    public function formation()
    {
        require "app/models/formation_model.php";
        $x = new FormationModel();
        $this->view->checkDetails = true;
        $this->view->listes = $x->recup();
        $this->view->entete = $x->recupEntete();
        $this->view->aleatoire("about/index");
    }
    public function experience()
    {
        require "app/models/experience_model.php";
        $x = new ExperienceModel();
        $this->view->checkDetails = true;
        $this->view->listes = $x->recup();
        $this->view->entete = $x->recupEntete();
        $this->view->aleatoire("about/index");
    }
    public function competences()
    {
        require "app/models/competences_model.php";
        $x = new CompetencesModel();
        $this->view->checkDetails = true;
        $this->view->listes = $x->recup();
        $this->view->entete = $x->recupEntete();
        $this->view->aleatoire("about/index");
    }
    public function langages()
    {
        require "app/models/langages_model.php";
        $x = new LangagesModel();
        $this->view->checkDetails = true;
        $this->view->listes = $x->recup();
        $this->view->entete = $x->recupEntete();
        $this->view->aleatoire("about/index");
    }
    public function interets()
    {
        require "app/models/interets_model.php";
        $x = new InteretsModel();
        $this->view->checkDetails = true;
        $this->view->listes = $x->recup();
        $this->view->entete = $x->recupEntete();
        $this->view->aleatoire("about/index");
    }


    public function index() //false est utilisé pour utiliser la fonction sans parametre.
    {
        //  echo "<h3>Je suis le méthode index</h3><hr>";
        //echo $x;
        //   echo $x;

        //Recuperation du model et l'instancier

        require "app/models/about_model.php";

        /*$about = (new About_model())->recup($y);*/
        $this->view->checkDetails = false;
        $this->view->aleatoire("about/index");
    }
}
