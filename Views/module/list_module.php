<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <style>
        body{
   
            background: #000;
            
}
        
    </style>
    <div class="cor">
<div class="">
    <span class="h2">Liste des Modules</span>
    <span class="offset-7">
        <a href="Controllers/Ctrl_Modules.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Code</th>
                <th>Heure</th>
                
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($modules as $m) { ?>
            <tr>
                <td><?=$m['nom']?></td>
                <td><?=$m['code']?></td>
                <td><?=$m['heure']?></td>
    
                <td>
                    <a href="Controllers/Ctrl_Modules.php?view=modification&id=<?= $m['id']?>" class="btn btn-warning">MODIFIER</a>
                    <a href="Controllers/Ctrl_Modules.php?action=supprimer&id=<?= $m['id']?>" class="btn btn-danger">SUPPRIMER</a>
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>
</div>