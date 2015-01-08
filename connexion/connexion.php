<?php
$base = "../";
$titre = "Sinistres";
require_once($base."include/header.php");
?>

<div id="page" class="container">
<h1>Connexion</h1>

<form class="form-horizontal" action="/connexion/traitement.php" method="post">
<fieldset>

<!-- Form Name -->
<legend class="well">Entrez vos informations de connexion.</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtLogin">Login</label>  
  <div class="col-md-4">
  <input id="txtLogin" name="txtLogin" type="text" placeholder="Nom d'utilisateur" class="form-control input-md" required="">
  <span class="help-block">Entrez votre nom d'utilisateur.</span>  
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="txtPass">Mot de passe</label>
  <div class="col-md-4">
    <input id="txtPass" name="txtPass" type="password" placeholder="**********" class="form-control input-md" required="">
    <span class="help-block">Votre mot de passe</span>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="cmdConnexion"></label>
  <div class="col-md-4">
    <button id="cmdConnexion" name="cmdConnexion" class="btn btn-success">Connexion</button>
  </div>
</div>

</fieldset>
</form>


</div>
<?php
require_once($base."include/footer.php");
?>