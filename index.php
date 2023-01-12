<?php
include "header.php";
?>
<style>
    *{
        margin-bottom: 20px;
    }
</style>
<?php
class accueil{
    public function affichage(){
        $view= isset($_GET['view']) ? $_GET['view'] : NULL;
        switch ($view) {
            case 'module':
                $this->includeView($view);
                break;
            case 'contact':
                $this->includeView($view);
                break;
            case 'etudiant':
                $this->includeView($view);
                break;
            case 'prof':
                $this->includeView($view);
                break;
            default:
                
                break;
        }
    }
        public function includeView($page ="index"){
                    if ($page == "contact"){
                        include 'Controllers/Ctrl_contact.php';
                        
                    }
                    else {
                        if ($page == "module"){
                        include 'Controllers/Ctrl_Modules.php';
                                                }
                        else {
                            if ($page == "prof"){
                            include 'Controllers/Ctrl_profs.php';
                            }
                            else{
                                if ($page == "etudiant"){
                                include 'Controllers/Ctrl_etudiants.php';
                                
                            }
                            }
                
                            }
                    
            
    
                    }
    }
}
$inde=new accueil();

$inde->affichage();


?>