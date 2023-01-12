<?php
require_once 'c:/xampp/htdocs/Projetexamen/Utils/db.php';
 class ProfModel{
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function inserer($email, $nom){
        $queryPrepare = $this->db->ds->prepare("INSERT INTO prof(nom, email) VALUES (?, ?)");
        return $queryPrepare->execute(array($nom,$email));
    }
    public function set_data ($email, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE prof SET email = ?, nom = ? WHERE id = ?");
        return $query->execute(array($email, $nom, $id));
    }
    public function delete_data ($id){
        $sql = $this->db->ds->prepare("DELETE FROM prof WHERE id =:idProf");
        $sql->bindValue(":idProf",$id);
        return $sql->execute();
    }
    public function get_data(){
        $query = $this->db->ds->prepare("SELECT * FROM prof");
        $query->execute();
        return $query ->fetchall();
    }
    public function findProfById($id){
        $query = $this->db->ds->prepare("SELECT * FROM prof WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(); 
    }
    
 }

?>