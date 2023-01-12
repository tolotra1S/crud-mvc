<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
<?= include "c:/xampp/htdocs/Projetexamen/header.php";?>  
<div class="row col-md-12">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <span class="h2 ">Nouveau Contact</span>
            <span class="offset-5">
                <a href="../index.php?view=contact" class="btn btn-success">Liste des Contacts</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_contact.php?action=add" method="POST">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Objet</label>
                    <input type="text" name="objet" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Message</label>
                    <br>
                    <textarea placeholder="Votre Message"name="messages" id="" cols="110" rows="10"></textarea>
                    
                </div>
               
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Engresistrer" name="add">
                </div>
            </form>
        </div>
    </div>
</div>