<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible()->flip() : false; 

?>
<?php if($items && $items->count()): ?>
	<nav class="projects">
	  <ul>
	    <?php foreach($items AS $item): ?>
	    <li>
	    	<h2 class="gamma"><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></h2>
	    </li>
	    <?php endforeach ?>            
	  </ul>
	</nav>
<?php endif ?>
