<?php

class LangagesModel extends Model
{

    public function recup()
    {
        $sql = 'SELECT Langages from langages';
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $verif = $stmt->fetchAll(PDO::FETCH_NUM);
        return $verif;
    }

    public function recupEntete()
    {
        $sql = 'SELECT Langages from langages LIMIT 1';
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $verif = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_flip($verif);
    }
}
