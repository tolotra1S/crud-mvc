<link rel="stylesheet" href="/Projetexamen/assets/bootstrap.css">
    <link rel="stylesheet" href="/Projetexamen/assets/fontawesome.css">  
    <style>
        body{
   
            background: #000;
            
}
        
    </style>
<div class="">
    <span class="h2">Liste des contacts</span>
    <span class="offset-7">
        <a href="Controllers/Ctrl_contact.php?view=ajout" class="btn btn-primary">Nouveau</a>
    </span>
</div>
<div class="">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
            
                <th>Nom</th>
                <th>Prenom</th>
                <th>Tel</th>
                <th>Email</th>
                <th>Objet</th>
                <th>Message</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($contacts as $c) { ?>
            <tr>
                <td><?=$c['nom']?></td>
                <td><?=$c['prenom']?></td>
                <td><?=$c['tel']?></td>
                <td><?=$c['email']?></td>
                <td><?=$c['objet']?></td>
                <td><?=$c['messages']?></td>
                <td>
                    <a href="Controllers/Ctrl_contact.php?view=modification&id=<?= $c['id']?>" class="btn btn-warning">MODIFIER</a>
                    <a href="Controllers/Ctrl_contact.php?action=supprimer&id=<?= $c['id']?>" class="btn btn-danger">SUPPRIMER</a>
                </td>
            </tr>
            <?php } ?> 
        </tbody>
    </table>
</div>