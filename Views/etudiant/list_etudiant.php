<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <style>
        body{
   
            background: #000;
            
}
        
    </style>
<div class="">
    <span class="h2">Liste des etudiants</span>
    <span class="offset-7">
        <a href="Controllers/Ctrl_etudiants.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
          
                <th>Nom</th>
                <th>Prenom</th>
                <th>Date de naissance</th>
                <th>CIN</th>
                <th>Email</th>
                <th>Tel</th>
                <th>compte</th>
                <th>photos</th>
                
               
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($etudiants as $e) { ?>
            <tr>
                
                <td><?=$e['nom']?></td>
                <td><?=$e['prenom']?></td>
                <td><?=$e['date_de_naissance']?></td>
                <td><?=$e['cin']?></td>
                <td><?=$e['email']?></td>
                <td><?=$e['tel']?></td>
                <td><?=$e['compte']?></td>
                <td><?=$e['photo']?></td>
                
                <td>
                    <a href="Controllers/Ctrl_etudiants.php?view=modification&id=<?= $e['id']?>" class="btn btn-warning">MODIFIER</i></a>
                    <a href="Controllers/Ctrl_etudiants.php?action=supprimer&id=<?= $e['id']?>" class="btn btn-danger">SUPPRIMER</a>
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>