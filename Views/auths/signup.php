<?php 
    
    include_once 'c:/xampp/htdocs/Projetexamen/Utils/fonction.php';
?>
<h1 class="header">Please Signup</h1>

<?php flash('register') ?>

<form method="post" action="login.php">
    <input type="hidden" name="type" value="register">
    <input type="text" name="nom" 
    placeholder="Full name...">
    <input type="text" name="email" 
    placeholder="Email...">
    <input type="text" name="username" 
    placeholder="Username...">
    <input type="password" name="mdp" 
    placeholder="Password...">
    <input type="password" name="mdprepeat" 
    placeholder="Repeat password">
    <button type="submit" name="submit">Sign Up</button>
</form>
    <style>
.header {
  text-align: center;
  margin-top: 20px;
}
form {
  margin: 10px auto 0 auto;
  max-width: 600px;
  width: 100%;
  padding: 0 20px;
}

form input {
  width: 100%;
  outline: none;
  border: 1px solid black;
  margin: 10px 0;
  padding: 10px 10px 10px 5px;
}

form button {
  margin-top: 10px;
  padding: 10px 20px;
}

button, input, select, textarea {
  font-family: inherit;
  font-size: 100%;
}

    </style>
    
