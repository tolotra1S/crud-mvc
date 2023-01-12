<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
<div class="row">
    <div class="card">
        <div class="card-header">
            <span class="h2 ">Modification prof</span>
            <span class="offset-5">
                <a href="Ctrl_profs.php" class="btn btn-success">Liste des Profs</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_profs.php?action=modifier" method="POST">
                <input type="hidden" name="id" value="<?= $prof['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?= $prof['nom'] ?>">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $prof['email'] ?>">
                </div>
                                <div class="">
                    <input type="submit" class="btn btn-primary" value="Valider" name="modif">
                </div>
            </form>
        </div>
    </div>
</div>