<?php if($page->hasPrevVisible()): ?>
			<a class="prev" href="<?php echo $page->prevVisible()->url() ?>">&lsaquo; Previous article</a>
<?php endif ?>
<?php if($page->hasNextVisible()): ?>
<a class="next" href="<?php echo $page->nextVisible()->url() ?>">Next article &rsaquo;</a>
<?php endif ?>