<?php

    require_once 'c:/xampp/htdocs/Projetexamen/models/User.php';
    require_once 'c:/xampp/htdocs/Projetexamen/Utils/fonction.php';

    class Users {

        private $userModel;
        
        public function __construct(){
            $this->userModel = new User;
        }

        public function register(){
            //Process form
            
            //Sanitize POST data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            //Init data
            $data = [
                'nom' => trim($_POST['nom']),
                'email' => trim($_POST['email']),
                'username' => trim($_POST['username']),
                'mdp' => trim($_POST['mdp']),
                'mdprepeat' => trim($_POST['mdprepeat'])
            ];

            //Validate inputs
            if(empty($data['nom']) || empty($data['email']) || empty($data['username']) || 
            empty($data['mdp']) || empty($data['mdprepeat'])){
                flash("register", "Please fill out all inputs");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            }

            if(preg_match("/^[a-zA-Z0-9]*$/", $data['username'])){
                flash("register", "Invalid username");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            }

            if(!filter_var($data['email'], FILTER_VALIDATE_EMAIL)){
                flash("register", "Invalid email");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            }

            if(strlen($data['mdp']) < 6){
                flash("register", "Invalid password");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            } else if($data['mdp'] !== $data['mdprepeat']){
                flash("register", "Passwords don't match");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            }

            //User with the same email or password already exists
            if($this->userModel->findUserByEmailOrUsername($data['email'], $data['nom'])){
                flash("register", "Username or email already taken");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/signup.php");
            }

            //Passed all validation checks.
            //Now going to hash password
            $data['mdp'] = password_hash($data['mdp'], PASSWORD_DEFAULT);

            //Register User
            if($this->userModel->register($data)){
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/login.php");
            }else{
                die("Something went wrong");
            }
        }

    public function login(){
        //Sanitize POST data
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        //Init data
        $data=[
            'nom/email' => trim($_POST['nom/email']),
            'mdp' => trim($_POST['mdp'])
        ];

        if(empty($data['nom/email']) || empty($data['mdp'])){
            flash("login", "Please fill out all inputs");
            header("location: c:/xampp/htdocs/Projetexamen/Views/auths/login.php");
            exit();
        }

        //Check for user/email
        if($this->userModel->findUserByEmailOrUsername($data['nom/email'], $data['nom/email'])){
            //User Found
            $loggedInUser = $this->userModel->login($data['nom/email'], $data['mdp']);
            if($loggedInUser){
                //Create session
                $this->createUserSession($loggedInUser);
            }else{
                flash("login", "Password Incorrect");
                redirect("c:/xampp/htdocs/Projetexamen/Views/auths/login.php");
            }
        }else{
            flash("login", "No user found");
            redirect("c:/xampp/htdocs/Projetexamen/Views/auths/login.php");
        }
    }

    public function createUserSession($user){
        $_SESSION['usersId'] = $user->usersId;
        $_SESSION['nom'] = $user->nom;
        $_SESSION['email'] = $user->email;
        redirect("../../index.php");
    }

    public function logout(){
        unset($_SESSION['usersId']);
        unset($_SESSION['nom']);
        unset($_SESSION['email']);
        session_destroy();
        redirect("../../index.php");
    }
}

    $init = new Users;

    //Ensure that user is sending a post request
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        switch($_POST['type']){
            case 'register':
                $init->register();
                break;
            case 'login':
                $init->login();
                break;
            default:
            redirect("../../index.php");
        }
        
    }else{
        switch($_GET['q']){
            case 'logout':
                $init->logout();
                break;
            default:
            redirect("../../index.php");
        }
    }

    