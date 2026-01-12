
		<section id="login">
			<div class="container">
				<div class="content">
					<div class="logo">
						<p class="h3">T;</p>
					</div>
					<h1 class="h2">Connecte-toi à ton compte</h1>
					<p>Retrouve ta clé secrète et suis ta progression. Si tu n'as pas encore de compte, tu peux <a href="#">t'inscrire ici</a>.</p>
				</div>
				<form method="post" action="<?= homeUrl() ?>login/post/">
					<div class="group">
						<label for="email">Email</label>
						<input type="email" name="email">
					</div>	
					<div class="group">
						<label for="password">Mot de passe</label>
						<input type="password" name="password">
					</div>	
					<p><input type="checkbox" name="remember"> Se souvenir de moi</p>
					<button href="#" class="btn bg-blue">Se connecter</button>
				</form>
				<a href="#" class="btn bg-grey"><span class="icon-github "></span> Se connecter avec github</a>
				<div class="center">
					<a class="lostPass" href="#">Mot de passe oublié ?</a>
				</div>
			</div>
		</section>
