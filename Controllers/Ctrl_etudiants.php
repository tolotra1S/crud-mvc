<?php
require_once 'c:/xampp/htdocs/Projetexamen/Models/Mdl_etudiant.php';
class EtudiantController{
    public function __construct(){
        $this->etudiantModel = new EtudiantModel();
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
            $this->etudiantModel->set_data($compte, $tel, $email, $cin, $date_de_naissance, $prenom, $nom,$id);
            header("location:../index.php?view=etudiant");
        }
    }
    public function add(){
        if (isset($_POST['add'])){
            extract($_POST);    
            $this->etudiantModel->inserer($compte, $tel, $email, $cin, $date_de_naissance, $prenom, $nom);
            header("location:../index.php?view=etudiant");
        }
    }
    public function delete (){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $resultat = $this->etudiantModel->delete_data($id);
            if($resultat){
                header("location:../index.php?view=etudiant");
            }
        }
    }
    public function includeView($page = "list_etudiant"){
        if($page == "list_etudiant"){
            $etudiants = $this->etudiantModel->get_data();
            include 'c:/xampp/htdocs/Projetexamen/Views/etudiant/'.$page.'.php';
        } else {
                if ($page == "modification" && isset($_GET['id'])){
                    $etudiant = $this->etudiantModel->findEtudiantById($_GET['id']);
                    include '../Views/etudiant/edit_etudiant.php';
                }
                else{
                     include '../Views/etudiant/add_etudiant.php';
                }
        }






        
        
    }
   
}
$etudiantCtrl = new EtudiantController();
$etudiantCtrl->index();

?>