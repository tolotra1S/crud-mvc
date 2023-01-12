<?php
require_once 'c:/xampp/htdocs/Projetexamen/Utils/db.php';

 class EtudiantModel{
    private $db;
    

    public function __construct(){
        $this->db = new DB();
    }
    public function inserer($compte, $tel, $email, $cin, $date_de_naissance, $prenom, $nom){

        $queryPrepare = $this->db->ds->prepare("INSERT INTO etudiant(nom, prenom, date_de_naissance, cin, email, tel, compte) VALUES (?, ?, ?, ?, ?, ?, ?)");
        return $queryPrepare->execute(array($nom,$prenom,$date_de_naissance,$cin,$email,$tel,$compte));
    }
    public function set_data ($compte, $tel, $email, $cin, $date_de_naissance, $prenom, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE etudiant SET compte = ?, tel = ?, email = ?, cin = ?, date_de_naissance = ?, prenom = ?, nom = ? WHERE id = ?");
        return $query->execute(array($compte, $tel, $email, $cin, $date_de_naissance, $prenom, $nom,$id));
    }
    public function delete_data ($id){
        $sql = $this->db->ds->prepare("DELETE FROM etudiant WHERE id =:idEtudiant");
        $sql->bindValue(":idEtudiant",$id);
        return $sql->execute();
    }
    public function get_data(){
        $query = $this->db->ds->prepare("SELECT * FROM etudiant");
        $query->execute();
        return $query ->fetchall();
    }
    public function findEtudiantById($id){
        $query = $this->db->ds->prepare("SELECT * FROM etudiant WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(); 
    }
    
 }

?>