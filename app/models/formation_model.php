<?php

class FormationModel extends Model
{

    public function recup()
    {
        try{
        $sql = 'SELECT Date, Description from formation';
        $stmt = $this->db->query($sql);
        $verif = $stmt->fetchAll(PDO::FETCH_NUM);
        return $verif;
        }catch(Exception $e){
            return array('erreur'=>$e->getMessage());
        }
    }

    public function recupEntete()
    {
        $sql = 'SELECT Date, Description from formation LIMIT 1';
        $stmt = $this->db->query($sql);
        $verif = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_flip($verif);
    }
}
