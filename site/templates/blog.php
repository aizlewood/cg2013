<?php snippet('header') ?>

<section class="content blog wrap">
  
  <h1><?php echo html($page->title()) ?></h1>
  <?php echo kirbytext($page->text()) ?>
  
  <?php if(param('tag')) {

    $tag = urldecode(param('tag'));
    $blog = $pages->find('blog')
                      ->children()
                      ->visible()
                      ->filterBy('tags', urldecode(param('tag')), ',')
                      ->flip()
                      ->paginate(20);

  } else {

    $blog = $pages->find('blog')
                      ->children()
                      ->visible()
                      ->flip()
                      ->paginate(20);

  } ?>

<?php foreach($blog as $article): ?>
  
  <ul class="blog-articles">
    <li><b><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></b></li>
  </ul>

  <?php endforeach ?>

<?php if($blog->pagination()->hasPages()): ?>
<div class="prevnext">
<nav class="pagination">  

  <?php if($blog->pagination()->hasNextPage()): ?>
  <a class="prev" href="<?php echo $blog->pagination()->nextPageURL() ?>">&lsaquo; Older posts</a>
  <?php endif ?>  

  <?php if($blog->pagination()->hasPrevPage()): ?>
  <a class="next" href="<?php echo $blog->pagination()->prevPageURL() ?>">Newer posts &rsaquo;</a>
  <?php endif ?>

</nav>
</div>
<?php endif ?>

</section>

</div><!-- /container -->

</body>

</html>