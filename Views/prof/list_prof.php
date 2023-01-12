<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <style>
        body{
   
            background: #000;
            
}
        
    </style>
<div class="">
    <span class="h2">Liste des PROFS</span>
    <span class="offset-7">
        <a href="Controllers/Ctrl_profs.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Email</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($profs as $p) { ?>
            <tr>
                <td><?=$p['nom']?></td>
                
                <td><?=$p['email']?></td>
                
                <td>
                    <a href="Controllers/Ctrl_profs.php?view=modification&id=<?= $p['id']?>" class="btn btn-warning">MODIFIER</a>
                    <a href="Controllers/Ctrl_profs.php?action=supprimer&id=<?= $p['id']?>" class="btn btn-danger">SUPPRIMER</a>
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>