<?php
class View
{
    public function __construct()
    {
        //echo "<h2>Coucou je suis la classe view !</h2><hr>";
    }


    public function aleatoire($x)
    {
        require "app/views/header.phtml";
        require "app/views/" . $x . ".php";
        require "app/views/footer.phtml";
    }
}
