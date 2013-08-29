<?php if($page->hasPrevVisible()): ?>
			<a class="prev" title="<?php echo $page->prevVisible()->title() ?>" href="<?php echo $page->prevVisible()->url() ?>">&larr;</a>
<?php endif ?>
<a href="#footer" title="Work menu">&#9776;</a>
<?php if($page->hasNextVisible()): ?>
<a class="next" title="<?php echo $page->nextVisible()->title() ?>" href="<?php echo $page->nextVisible()->url() ?>">&rarr;</a>
<?php endif ?>