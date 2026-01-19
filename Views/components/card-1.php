<article class="card">
		<div class="level debutant">
				
					<?php
					 if(array_key_exists("level",$fields)){

					 	foreach ($fields['level'] as $value) {
							echo "
								<a href=".homeUrl()."challenges/?filter=".$value.">
									<span>".$value."</span> 
								</a>
								";
						}

					 }else{
						echo "Intermédiaire";
					 }
					
					?>
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