<?php
require_once 'c:/xampp/htdocs/Projetexamen/Utils/db.php';

class Mdlauth {

    private $db;

    public function __construct(){
        $this->db = new DB ;
    }

    //Find user by email or username
    public function findUserByEmailOrUsername($email, $nom){
        $this->db->query('SELECT * FROM auths WHERE username = :nom OR email = :email');
        $this->db->bind(':nom', $nom);
        $this->db->bind(':email', $email);

        $row = $this->db->single();

        //Check row
        if($this->db->rowCount() > 0){
            return $row;
        }else{
            return false;
        }
    }

    //Register User
    public function register($data){
        $this->db->query('INSERT INTO auths (nom, email, username, mdp) 
        VALUES (:nom, :email, :Uid, :mdp)');
        //Bind values
        $this->db->bind(':nom', $data['nom']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':Uid', $data['username']);
        $this->db->bind(':mdp', $data['mdp']);

        //Execute
        if($this->db->execute()){
            return true;
        }else{
            return false;
        }
    }

    //Login user
    public function login($nomOrEmail, $mdp){
        $row = $this->findUserByEmailOrUsername($nomOrEmail, $nomOrEmail);

        if($row == false) return false;

        $hashedPassword = $row->usersPwd;
        if(password_verify($mdp, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }

}