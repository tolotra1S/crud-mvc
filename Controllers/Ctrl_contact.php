<?php
require_once 'c:/xampp/htdocs/Projetexamen/Models/Mdl_contact.php';
class ContactController{
    public function __construct(){
        $this->contactModel = new ContactModel();
    }
//index = viewmanager
    public function index(){
        $view= isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'ajout':
                $this->includeView($view);
                break;
            case 'modification':
                $this->includeView($view);
                break;
            default:
            $this->includeView();
                break;
        }
        $action = isset($_GET['action']) ? $_GET['action'] : NULL;
        switch ($action) {
            case 'add':
                $this->add();
                break;
            case 'supprimer':
                $this->delete();
                break;
            case 'modifier':
                $this->update();
                break;
            default:
                # code...
                break;
        }
        
        
    }
    public function update(){
        if (isset($_POST['modif'])){
            extract($_POST);    
            $this->contactModel->set_data($messages, $objet, $email, $tel, $prenom, $nom, $id);
            header("location: ../index.php?view=contact");
        }
    }
    public function add(){
        if (isset($_POST['add'])){
            extract($_POST);    
            $this->contactModel->inserer($messages, $objet, $email, $tel, $prenom, $nom);
            header("location:../index.php?view=contact");
        }
    }
    public function delete (){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $resultat = $this->contactModel->delete_data($id);
            if($resultat){
                header("location:../index.php?view=contact");
            }
        }
    }
    public function includeView($page = "list_contact"){
        if($page == "list_contact"){
            $contacts = $this->contactModel->get_data();
            include 'c:/xampp/htdocs/Projetexamen/Views/contact/'.$page.'.php';
        } else {
                if ($page == "modification" && isset($_GET['id'])){
                    $contact = $this->contactModel->findContactById($_GET['id']);
                    include '../Views/contact/edit_contact.php';
                }
                else{
                     include '../Views/contact/add_contact.php';
                }
        }






        
        
    }
   
}
$contactCtrl = new ContactController();
$contactCtrl->index();


?>