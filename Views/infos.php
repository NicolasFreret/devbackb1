
		<section id="hero"></section>
		<div class="triangle"></div>
		<section id="quests">
			<div class="container">
				<?= getComposant('sidebar.php') ?>
				<div class="form">
					<h1 class="h2">Editer mes informations</h1>
					<form action="<?= homeUrl() ?>update/" method="POST">
						<div class="group">
							<label for="peudo">Pseudo</label>
							<input type="text" name="username" value="<?= $_SESSION['user']['username'] ?>">
						</div>
						<div class="group">
							<label for="email">Adresse e-mail</label>
							<input type="email" name="email" value="<?= $_SESSION['user']['email'] ?>">
						</div>
						<div class="group">
							<label for="prénom">Prénom</label>
							<input type="text" name="firstname" value="<?= $_SESSION['user']['name']['firstname'] ?>">
						</div>
						<div class="group">
							<label for="nom">Nom</label>
							<input type="text" name="lastname" value="<?= $_SESSION['user']['name']['lastname'] ?>">
						</div>
						<div class="group">
							<label for="peudo">Je vis dans la belle ville de</label>
							<input type="text" name="city" value="<?= $_SESSION['user']['address']['city'] ?>">
						</div>
						<div class="group"></div>
						<div class="group">
							<label for="peudo">Je préfère le</label>
							<select name="_code">
								<option value="PHP">PHP</option>
								<option value="JS">Javascript</option>
								<option value="Python">Python</option>
							</select>
						</div>
						<div class="group">
							<label for="peudo">Je pratique le code depuis</label>
							<select name="_xp">
								<option value="debutant">Moins d'un an</option>
								<option value="intermediaire">1 ou 2 ans</option>
								<option value="expert">3 à 5 ans</option>
								<option value="master">+ 5 ans</option>
							</select>
						</div>
						<div class="group">
							<label for="peudo">Je suis</label>
							<select name="_status">
								<option value="student">Etudiant.e</option>
								<option value="teacher">Formateur.trice</option>
								<option value="dev">Développeur.euse</option>
							</select>
						</div>
						<button>Mettre à jour</button>
					</form>
				</div>
			</div>
		</section>
