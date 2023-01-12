<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
    
<div class="row col-md-12">
    <div class="card col-10 offset-1">
        <div class="card-header">
            <span class="h2 ">Nouveau Etudiants</span>
            <span class="offset-5">
                <a href="../index.php?view=etudiant" class="btn btn-success">Liste des Etudiants</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_etudiants.php?action=add" method="POST">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input type="text" name="date_de_naissance" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="cin" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Compte</label>
                    <input type="text" name="compte" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">Photo</label>
                    <input type="file" name="compte" class="form-control">
                    
                </div>
                
                
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Engresistrer" name="add">
                </div>
            </form>
        </div>
    </div>
</div>