<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
<div class="row">
    <div class="card">
        <div class="card-header">
            <span class="h2 ">Modification Module</span>
            <span class="offset-5">
                <a href="../index.php?view=module" class="btn btn-success">Liste des Modules</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_Modules.php?action=modifier" method="POST">
                <input type="hidden" name="id" value="<?= $module['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?= $module['nom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" class="form-control" value="<?= $module['code'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Heure</label>
                    <input type="text" name="heure" class="form-control" value ="<?= $module['heure'] ?>">
                </div>
                
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Valider" name="modif">
                </div>
            </form>
        </div>
    </div>
</div>