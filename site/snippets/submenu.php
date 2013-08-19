<?php 

// find the open/active page on the first level
$open  = $pages->findOpen();
$items = ($open) ? $open->children()->visible()->flip() : false; 

?>
<?php if($items && $items->count()): ?>
	<nav class="submenu">
	<h4 class="zeta">More</h4>
	  <ul>
	    <?php foreach($items AS $item): ?>
	    <li><a<?php echo ($item->isOpen()) ? ' class="active"' : '' ?> href="<?php echo $item->url() ?>"><?php echo html($item->title()) ?></a></li>
	    <?php endforeach ?>            
	  </ul>
	</nav>
<?php endif ?>
