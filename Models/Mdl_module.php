<?php
require_once 'c:/xampp/htdocs/Projetexamen/Utils/db.php';
 class ModuleModel{
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function inserer($heure, $code, $nom){

        $queryPrepare = $this->db->ds->prepare("INSERT INTO module(nom, code, heure) VALUES (?, ?, ?)");
        return $queryPrepare->execute(array($nom,$code,$heure));
    }
    public function set_data ($heure, $code, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE module SET heure = ?, code = ?, nom = ? WHERE id = ?");
        return $query->execute(array($heure, $code, $nom,$id));
    }
    public function delete_data ($id){
        $sql = $this->db->ds->prepare("DELETE FROM module WHERE id =:idModule");
        $sql->bindValue(":idModule",$id);
        return $sql->execute();
    }
    public function get_data(){
        $query = $this->db->ds->prepare("SELECT * FROM module");
        $query->execute();
        return $query ->fetchall();
    }
    public function findModuleById($id){
        $query = $this->db->ds->prepare("SELECT * FROM module WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(); 
    }
    
 }

?>