<?php
$base = "../";
$titre = "Alertes";
require_once($base."include/header.php");
?>
  	<div id="page" class="container">
		<h1>Alertes</h1>
		<?php
		for ($i=0; $i < 5; $i++) { 
			?>
		<div class="panel panel-default">
		  <div class="panel-heading">
		    <h2 class="panel-title">Il y a une inondation sur la rue Ste-Catherine</h2>
		  </div>
		  <div class="panel-body">
		    <p>Tout le monde a les pieds mouillés, c'est super triste. Mettez vos bottes</p>
		    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
		  </div>
		  <div class="panel-footer">
			<nav>
			  	<ul class="nav nav-pills">
				  <li role="presentation"><a href="#">#Inondation</a></li>
				  <li role="presentation"><a href="#">#Rue Ste-Catherine</a></li>
				</ul>
			</nav>
		  </div>
		</div>
		<?php
	}?>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>