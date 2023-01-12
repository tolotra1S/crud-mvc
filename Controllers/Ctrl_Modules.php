<?php
require_once 'c:/xampp/htdocs/Projetexamen/Models/Mdl_module.php';
class ModuleController{
    public function __construct(){
        $this->moduleModel = new ModuleModel();
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
            $this->moduleModel->set_data($heure, $code, $nom, $id);
            header("location:../index.php?view=module");
        }
    }
    public function add(){
        if (isset($_POST['add'])){
            extract($_POST);    
            $this->moduleModel->inserer($heure, $code, $nom);
            header("location:../index.php?view=module");
        }
    }
    public function delete (){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $resultat = $this->moduleModel->delete_data($id);
            if($resultat){
                header("location:../index.php?view=module");
            }
        }
    }
    public function includeView($page = "list_module"){
        if($page == "list_module"){
            $modules = $this->moduleModel->get_data();
            include 'c:/xampp/htdocs/Projetexamen/Views/module/'.$page.'.php';
        } else {
                if ($page == "modification" && isset($_GET['id'])){
                    $module = $this->moduleModel->findModuleById($_GET['id']);
                    include '../Views/module/edit_module.php';
                }
                else{
                     include '../Views/module/add_module.php';
                }
        }






        
        
    }
   
}
$moduleCtrl = new ModuleController();
$moduleCtrl->index();

?>