<?php
$base = "../";
$titre = "Sinistres";
require_once($base."include/header.php");
?>

<div id="page" class="container">
<h1>Sinistres</h1>

<form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Publier un rapport de sinistre</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-2 control-label" for="txtTitre">Tirte du rapport</label>  
  <div class="col-md-6">
  <input id="txtTitre" name="txtTitre" type="text" placeholder="Sinistre au coin de Rue A et Rue B." class="form-control input-md" required="">
  <span class="help-block">Un titre concis contenant le type et le lieu du sinistre.</span>  
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-2 control-label" for="txtCategorie">Catégorie</label>
  <div class="col-md-6">
    <select id="txtCategorie" name="txtCategorie" class="form-control">
      <option value="val1">Catégorie 1</option>
      <option value="val2">Catégorie 2</option>
      <option value="val3">Catégorie 3</option>
      <option value="val4">Catégorie 4</option>
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-2 control-label" for="txtDescription">Le contenu du rapport.</label>
  <div class="col-md-6">                     
    <textarea class="form-control" id="txtDescription" name="txtDescription"> Soyez concis et précis.</textarea>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="cmdGetGeoPos">Localisation</label>
  <div class="col-md-6">
    <button id="cmdGetGeoPos" name="cmdGetGeoPos" class="btn btn-primary">Position actuelle</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="cmdChoisirGeoPos"></label>
  <div class="col-md-6">
    <button id="cmdChoisirGeoPos" name="cmdChoisirGeoPos" class="btn btn-primary">Choisir sur une carte</button>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-2 control-label" for="cmdEnvoyer">Publication</label>
  <div class="col-md-6">
    <button id="cmdEnvoyer" name="cmdEnvoyer" class="btn btn-success">Envoyer</button>
  </div>
</div>

</fieldset>
</form>
</div>
<?php
require_once($base."include/footer.php");
?>