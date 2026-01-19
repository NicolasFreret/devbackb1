
		<section id="hero" class="challenge">
			<div class="container">
				<div class="content">
					<h1 class="h1">
						<?= $p['datas']['title'] ?>
					</h1>
					<p>La salle des coffres d’une prestigieuse banque… De nombreuses portes renfermant sans doute des trésors… Arriveras tu à tout ouvrir ?</p>
					<a href="" class="btn bg-blue">
						<span class="icon-code white small"></span> Coder dans Sandbox
					</a>
				</div>	
				<figure>
					<img src="https://wp.tainix.fr/wp-content/uploads/2023/02/Le-maitre-des-cles.avif" alt="">
				</figure>
			</div>
		</section>
		<div class="triangle"></div>
		<section id="content">
			<div class="container">
				<?= $p['datas']['body'] ?>
			</div>
		</section>
		<section id="related">
			<div class="container title">
				<h2 class="h1">Keep Coding</h2>
				<p class="strong-2">Autres challenges à réaliser</p>
			</div>
			<div class="container">
				<div class="grid col-3">
					<?= $p['related'] ?>
				</div>
			</div>	
		</section>	
