
<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible() : false; 

?>
<?php if($items && $items->count()): ?>
	<nav class="projects">
		<ul>
		<?php foreach($items AS $item): ?>

			<li>
<!-- 				<h2 class="delta"><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2> -->
<!-- 				<h3 class="zeta thin"><?php echo kirbytext($item->blurb()) ?></h3> -->
				<figure>
				<a href="<?php echo $item->url() ?>"><img src="<?php echo $item->images()->first()->url() ?>" alt="<?php echo html($item->title()) ?>" /></a>
				</figure>	    	
			</li>

		<?php endforeach ?>

		</ul>
	</nav>
<?php endif ?>
