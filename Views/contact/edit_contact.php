<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
<div class="row">
    <div class="card">
        <div class="card-header">
            <span class="h2 ">Modification Contact</span>
            <span class="offset-5">
                <a href="../index.php?view=contact" class="btn btn-success">Liste des Contacts</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_contact.php?action=modifier" method="POST">
                <input type="hidden" name="id" value="<?= $contact['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?= $contact['nom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control" value="<?= $contact['prenom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control" value ="<?= $contact['tel'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $contact['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Objet</label>
                    <input type="text" name="objet" class="form-control"value ="<?= $contact['objet'] ?>">
                </div>
                <div class="form-group">
                <label for="">Message</label>
                    <br>
                    <textarea name="messages" id="" cols="110" rows="10" placeholder ="<?= $contact['messages'] ?>"></textarea>
                    
                </div>
                
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Valider" name="modif">
                </div>
            </form>
        </div>
    </div>
</div>