<?php if($page->hasPrevVisible()): ?>
			<a class="prev" title="Previous" href="<?php echo $page->prevVisible()->url() ?>">&larr;</a>
<?php endif ?>
<a href="#footer" title="Work menu">&#9776;</a>
<?php if($page->hasNextVisible()): ?>
<a class="next" title="Next" href="<?php echo $page->nextVisible()->url() ?>">&rarr;</a>
<?php endif ?>