<aside class="profil">
	<div class="photo__name">
		<figure>
			<img src="https://tainix.fr/img/user_default_profile_pic.svg?1722934231" alt="">
		</figure>
		<div class="name">
			<h2 class="h3">
				<?= $_SESSION['user']['username'] ?>
			</h2>
			<p>151 xp</p>
		</div>
	</div>
	<nav>
		<a href="#"><span class="icon-success small"></span> Succès</a>
		<a href="#"><span class="icon-code small black"></span> Challenges</a>
		<a href="#"><span class="icon-group"></span> Communauté</a>
		<a href="<?= homeUrl() ?>mes-informations/"><span class="icon-user black"></span> Mes informations</a>
	</nav>
</aside>