<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
<?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
<div class="row col-md-12">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <span class="h2 ">Nouveau Module</span>
            <span class="offset-5">
                <a href="../index.php?view=module" class="btn btn-success">Liste des Modules</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_Modules.php?action=add" method="POST">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Code</label>
                    <input type="text" name="code" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Heure</label>
                    <input type="text" name="heure" class="form-control">
                </div>
                               
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Engresistrer" name="add">
                </div>
            </form>
        </div>
    </div>
</div>