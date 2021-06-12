<?php

class InteretsModel extends Model
{

    public function recup()
    {
        $sql = 'SELECT Intérêts from interets';
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $verif = $stmt->fetchAll(PDO::FETCH_NUM);
        return $verif;
    }

    public function recupEntete()
    {
        $sql = 'SELECT Intérêts from interets LIMIT 1';
        $stmt = $this->db->query($sql);
        $stmt->execute();
        $verif = $stmt->fetch(PDO::FETCH_ASSOC);
        return array_flip($verif);
    }
}
