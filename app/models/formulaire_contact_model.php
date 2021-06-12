<?php
class FormulaireContactModel extends Model
{

    public function recupForm($societe, $nom, $mail, $message)
    {
        $date = date("Y-m-d");
        $sql = "INSERT INTO messageentrant (Date, Société, Nom, Mail, Message) VALUES (?,?,?,?,?)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(1, $date, PDO::PARAM_STR);
        $stmt->bindValue(2, $societe, PDO::PARAM_STR);
        $stmt->bindValue(3, $nom, PDO::PARAM_STR);
        $stmt->bindValue(4, $mail, PDO::PARAM_STR);
        $stmt->bindValue(5, $message, PDO::PARAM_STR);
        return $stmt->execute();
    }



    /*else {
            $erreur = true;
            header("Location: PATHcontact/index.php");
        }*/
}
