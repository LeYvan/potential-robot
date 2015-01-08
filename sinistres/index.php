<?php
$base = "../";
$titre = "Sinistres";
require_once($base."include/header.php");
?>
  	<div id="page" class="container">
		<h1>Sinistres</h1>
  		<div class="panel">
  			<a href="/sinistres/ajouter.php"><h4><span class="label label-warning"><span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"></span>Publier un noueau rapport</span></h4></a>
  		</div>
  		<div class="row">
			<div class="col-md-3 col-md-push-9">
				<div class="list-group">
				  <a href="javascript:void()" class="list-group-item active">
				    Toutes les catégories
				  </a>
				  <a href="javascript:void()" class="list-group-item">Catégorie A <span class="badge">420</span></a>
				  <a href="javascript:void()" class="list-group-item">Catégorie B</a>
				  <a href="javascript:void()" class="list-group-item">Dr. Barette</a>
				</div>
			</div>
  			<div class="col-md-9 col-md-pull-3">
  			<?php
  			for ($i=0; $i < 5; $i++) { 
  				# code...
  				?>
				<div class="media">
				  <div class="media-body">
				    <h2 class="media-heading">Il y a une inondation sur la rue Ste-Catherine</h2>
 					<big>
 						<span class="label label-default">Inondation</span>
 						<span class="label label-default">Égouts</span>
 						<span class="label label-default">Dr. Barette</span>
 					</big>

				    <p>Tout le monde a les pieds mouillés, c'est super triste. Mettez vos bottes</p>
				    <p>Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression. Le Lorem Ipsum est le faux texte standard de l'imprimerie depuis les années 1500, quand un peintre anonyme assembla ensemble des morceaux de texte pour réaliser un livre spécimen de polices de texte. Il n'a pas fait que survivre cinq siècles, mais s'est aussi adapté à la bureautique informatique, sans que son contenu n'en soit modifié. Il a été popularisé dans les années 1960 grâce à la vente de feuilles Letraset contenant des passages du Lorem Ipsum, et, plus récemment, par son inclusion dans des applications de mise en page de texte, comme Aldus PageMaker.</p>
				  </div>
				  <a class="media-right" href="javascript:alert('Carte')">
				    <canvas height="100%" width="100%" style="background-color:#F47B2D;"></canvas>
				  </a>
					<div class="row">
					  <div class="col-xs-6 col-sm-7 col-md-3">
					    <a href="javascript:alert('Image/Vidéo')" class="thumbnail">
					      <img data-src="holder.js/200%x180" alt="Image envoyée par un utilisateur" src="http://mutantville.com/blog/wp-content/uploads/2009/10/im+vEdDxNOvUZzmPF1Ci7y5g.jpg">
					    </a>
					  </div>
					  <div class="col-xs-6 col-sm-7 col-md-3">
					    <a href="javascript:alert('Image/Vidéo')" class="thumbnail">
					    	<video width="100%" controls>
					    		<source src="images/videoplayback.mp4" type="video/mp4">
					    	</video>
					    </a>
					</div>
				</div>
				<?php
			}?>
			</div>

		</div>
    </div>
    <script>
    var canvas = document.getElementsByTagName("canvas");
    for (var i = 0; i < canvas.length; i++) {
    	var c = canvas[i];
    	var size = c.height;
		var ctx = c.getContext("2d");

		var x = Math.random()*size;
		var y = Math.random()*size;
		// ctx.moveTo(x,0);
		// ctx.lineTo(x,size);
		// ctx.stroke();

		// ctx.moveTo(0,y);
		// ctx.lineTo(size,y);
		// ctx.stroke();

		ctx.font="30px Arial";
		// ctx.arc(x,y,size/50,0,2*Math.PI);
		ctx.fillText("📍",x, y);
		// ctx.fill();
    }
    </script>
<?php
require_once($base."include/footer.php");
?>