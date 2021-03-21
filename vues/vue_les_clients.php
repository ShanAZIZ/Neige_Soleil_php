<h3> Liste des clients </h3>

<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Prenom</th>
      <th scope="col">Adresse</th>
      <th scope="col">Telephone</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($lesClients as $unClient){ ?>
    <tr>
      <td scope="row"><?=$unClient["client_id"]?></td>
      <td scope="row"><?=$unClient["client_nom"]?></td>
      <td scope="row"><?=$unClient["client_prenom"]?></td>
      <td scope="row"><?=$unClient["client_adresse"]?></td>
      <td scope="row"><?=$unClient["client_telephone"]?></td>
      <td scope="row">
        <a class="btn btn-primary" href="index.php?page=1&action=edit&client_id=<?=$unClient['client_id']?>">Modifier</a>
        <a class="btn btn-danger" href="index.php?page=1&action=sup&client_id=<?=$unClient['client_id']?>">Supprimer</a>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>