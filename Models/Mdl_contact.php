<?php
require_once 'c:/xampp/htdocs/Projetexamen/Utils/db.php';
 class ContactModel{
    private $db;

    public function __construct(){
        $this->db = new DB();
    }
    public function inserer($messages, $objet, $email, $tel, $prenom, $nom){

        $queryPrepare = $this->db->ds->prepare("INSERT INTO contact(nom, prenom, tel, email, objet, messages) VALUES (?, ?, ?, ?, ?, ?)");
        return $queryPrepare->execute(array($nom,$prenom,$tel,$email,$objet,$messages));
    }
    public function set_data ($messages, $objet, $email, $tel, $prenom, $nom, $id){
        $query = $this->db->ds->prepare("UPDATE contact SET messages = ?, objet = ?, email = ?, tel = ?, prenom = ?, nom = ? WHERE id = ?");
        return $query->execute(array($messages,$objet,$email,$tel,$prenom,$nom,$id));
    }
    public function delete_data ($id){
        $sql = $this->db->ds->prepare("DELETE FROM contact WHERE id =:idContact");
        $sql->bindValue(":idContact",$id);
        return $sql->execute();
    }
    public function get_data(){
        $query = $this->db->ds->prepare("SELECT * FROM contact");
        $query->execute();
        return $query ->fetchall();
    }
    public function findContactById($id){
        $query = $this->db->ds->prepare("SELECT * FROM contact WHERE id = ?");
        $query->execute(array($id));
        return $query->fetch(); 
    }
    
 }

?>