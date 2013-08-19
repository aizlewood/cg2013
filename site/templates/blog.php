<?php snippet('header') ?>

<section class="content blog wrap">
  
  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
  
<?php $articles = $page->children()->visible()->flip()->paginate(1000) ?>

<?php foreach($articles as $article): ?>
  
  <article>
    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
  </article>

  <?php endforeach ?>

<?php if($articles->pagination()->hasPages()): ?>
<nav class="pagination">  

  <?php if($articles->pagination()->hasNextPage()): ?>
  <a class="next" href="<?php echo $articles->pagination()->nextPageURL() ?>">&lsaquo; older posts</a>
  <?php endif ?>

  <?php if($articles->pagination()->hasPrevPage()): ?>
  <a class="prev" href="<?php echo $articles->pagination()->prevPageURL() ?>">newer posts &rsaquo;</a>
  <?php endif ?>

</nav>
<?php endif ?>

</section>

</div><!-- /container -->

</body>

</html>