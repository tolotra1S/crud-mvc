<?php
require_once 'c:/xampp/htdocs/Projetexamen/Models/Mdl_prof.php';
class ProfController{
    public function __construct(){
        $this->profModel = new ProfModel();
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
            $this->profModel->set_data($email, $nom, $id);
            header("location:../index.php?view=prof");
        }
    }
    public function add(){
        if (isset($_POST['add'])){
            extract($_POST);    
            $this->profModel->inserer($email, $nom);
            header("location: ../index.php?view=prof");
        }
    }
    public function delete (){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $resultat = $this->profModel->delete_data($id);
            if($resultat){
                header("location:../index.php?view=prof");
            }
        }
    }
    public function includeView($page = "list_prof"){
        if($page == "list_prof"){
            $profs = $this->profModel->get_data();
            include 'c:/xampp/htdocs/Projetexamen/Views/prof/'.$page.'.php';
        } else {
                if ($page == "modification" && isset($_GET['id'])){
                    $prof = $this->profModel->findProfById($_GET['id']);
                    include '../Views/prof/edit_prof.php';
                }
                else{
                     include '../Views/prof/add_prof.php';
                }
        }






        
        
    }
   
}
$profCtrl = new ProfController();
$profCtrl->index();

?>