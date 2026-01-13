
		<section id="hero">
			<div class="container">
				<h1 class="h1">
					Challenges
				</h1>
				<p class="strong">Les challenges de code te permettent de mettre à l'épreuve tes compétences en programmation.</p>
			</div>
		</section>
		<div class="triangle"></div>

		<section id="challenges">
			<div class="container title">
				<div class="filters">
					<a href="#" data-filter="card" class="active btn">
						Tous
					</a>
					<a href="#" data-filter="starter" class="btn starter">
						Starter
					</a>
					<a href="#" data-filter="debutant" class="btn debutant">
						Débutant
					</a>
					<a href="#" data-filter="intermediaire" class="btn intermediaire">
						Intermédiaire
					</a>
					<a href="#" data-filter="avance" class="btn avance">
						Avancé
					</a>
				</div>			
				<div class="grid col-3">
					<?= $p['challenges'] ?>
				</div>
			</div>
		</section>
