<?php
$base = "../";
$titre = "Sinistres";
require_once($base."include/header.php");

$nav_en_cours = 'sinistres';
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
				$images = Array("http://images.sodahead.com/slideshows/000020877/cd1a1413f3de6ccdd6413e015df09228_xlarge.jpeg","http://mutantville.com/blog/wp-content/uploads/2009/10/im+vEdDxNOvUZzmPF1Ci7y5g.jpg");
				$titres = Array("Karatéka fou!", "Homme ivre à contre-sens sur la 20", "Borne fontaine mal éclairée", "Stationnement trop petit","Poubelle de la mauvaise couleur");
				for ($i=0; $i < 5; $i++)
				{ 
					# code...
					?>
					<div class="media">
						<div class="media-body">
							<h2 class="media-heading"><?php echo $titres[$i];?></h2>
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
							<div class="col-xs-6 col-sm-4 col-lg-3">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#mediaModal">
									<img alt="Image envoyée par un utilisateur" src="<?php echo $images[$i%2];?>">
								</a>
							</div>
							<div class="col-xs-6 col-sm-4 col-lg-3">
								<a href="#" class="thumbnail" data-toggle="modal" data-target="#mediaModal">
									<video width="100%" controls>
										<source src="images/videoplayback.mp4" type="video/mp4">
									</video>
								</a>
							</div>
						</div>
					</div>
					<?php
				}?>
				<!-- Modal -->
				<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel" aria-hidden="true">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
								<h4 class="modal-title" id="mediaModalLabel">Titre</h4>
							</div>
							<div class="modal-body"></div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<script>
$('#mediaModal').on('show.bs.modal', function (event) {
  var lien = $(event.relatedTarget) // Button that triggered the modal
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text(lien.parents(".media").find('.media-heading').text())
  modal.find('.modal-body').html(lien.html())
})

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