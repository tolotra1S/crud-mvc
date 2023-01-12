<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <?= include "c:/xampp/htdocs/Projetexamen/header.php";?>
<div class="row">
    <div class="card">
        <div class="card-header">
            <span class="h2 ">Modification Etudiant</span>
            <span class="offset-5">
                <a href="../index.php?view=etudiant" class="btn btn-success">Liste des Etudiants</a></span>
        </div>
        <div class="card-body">
            <form action="Ctrl_etudiants.php?action=modifier" method="POST">
                <input type="hidden" name="id" value="<?= $etudiant['id'] ?>">
                <div class="form-group">
                    <label for="">Nom</label>
                    <input type="text" name="nom" class="form-control" value="<?= $etudiant['nom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Prenom</label>
                    <input type="text" name="prenom" class="form-control" value="<?= $etudiant['prenom'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Date de naissance</label>
                    <input type="text" name="date_de_naissance" class="form-control" value="<?= $etudiant['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">CIN</label>
                    <input type="text" name="cin" class="form-control" value="<?= $etudiant['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Email</label>
                    <input type="text" name="email" class="form-control" value="<?= $etudiant['email'] ?>">
                </div>
                <div class="form-group">
                    <label for="">Telephone</label>
                    <input type="text" name="tel" class="form-control" value ="<?= $etudiant['tel'] ?>">
                </div>
                
                <div class="form-group">
                    <label for="">Compte</label>
                    <input type="text" name="compte" class="form-control"value ="<?= $etudiant['objet'] ?>">
                </div>
                <div class="form-group">
                <?php
                    while ($row = mysqli_fetch_array($result)) {
                    
                        echo "<img src='images/".$row['photo']."' >";
                    
                    }
                ?>
                    <label for="">photo</label>
                    <input type="file" name="photos" class="form-control"value ="<?= $etudiant['objet'] ?>">
                </div>
                                
                <div class="">
                    <input type="submit" class="btn btn-primary" value="Valider" name="modif">
                </div>
            </form>
        </div>
    </div>
</div>