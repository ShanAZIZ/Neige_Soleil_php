<br>
<h2>Ajout d'un nouveau client</h2>
<br>

<form action="" method="post">
    <div class="form-group">
        <label for="nom" class="form-label">Nom du client</label>
        <input 
            class="form-control"
            type="text" 
            name="client_nom" 
            id="nom"
            value="<?php echo ($leClientEdit != null) ? $leClientEdit["client_nom"] : ''; ?>"> 
    </div>
    <div class="form-group">
        <label for="prenom" class="form-label">Prenom du client</label>
        <input 
            class="form-control"
            type="text" 
            name="client_prenom" 
            id="prenom"
            value="<?php echo ($leClientEdit != null) ? $leClientEdit['client_prenom'] : ''; ?>"> 
    </div>
    <div class="form-group">
        <label for="adresse" class="form-label">Adresse du client</label>
        <input 
            class="form-control"    
            type="text" 
            name="client_adresse" 
            id="adresse"
            value="<?php echo ($leClientEdit != null) ? $leClientEdit['client_adresse'] : ''; ?>"> 
    </div>
    <div class="form-group">
        <label for="tel" class="form-label">Telephone du client</label>
        <input 
            class="form-control"
            type="text" 
            name="client_telephone" 
            id="tel"
            value="<?php echo ($leClientEdit != null) ? $leClientEdit['client_telephone'] : ''; ?>"> 
    </div>
    <input type="submit" value="Valider" class="btn btn-primary" name="<?php echo ($leClientEdit != null) ? 'modifier' : 'valider'; ?>">
</form>
<br>