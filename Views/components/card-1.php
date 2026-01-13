<article class="card">
		<div class="level debutant">
				<span>
					<?= array_key_exists("level",$fields) ? $fields['level'] : "intermédiaire" ?>
				</span>
		</div>
	    <figure>
			<img loading="lazy" src="<?= $fields['img'] ?>" alt="">
		</figure>
		<div class="content">
		<h1 class="h3 line-clamp clamp-2">
			<?= $fields['title'] ?>
		</h1>
		<p>
			<?= $fields['content'] ?>
		</p>
		<a href="<?= array_key_exists("url",$fields) ? $fields['url'] : "#" ?>" class="btn blue">
			<span class="icon-code small"></span> Je code
		</a>
		</div>
</article>