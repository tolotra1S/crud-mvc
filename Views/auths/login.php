
<?php 
    include_once 'c:/xampp/htdocs/Projetexamen/Utils/fonction.php';
?>

<h1 class="header">Please Login</h1>

<?php flash('login') ?>

<form method="post" action="../../controllers/Ctrl_auths.php">
<input type="hidden" name="type" value="login">
    <input type="text" name="nom/email"  
    placeholder="Username/Email...">
    <input type="password" name="mdp" 
    placeholder="Password...">
    <button type="submit" name="submit">Log In</button>
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