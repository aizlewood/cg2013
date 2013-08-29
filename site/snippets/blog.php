

<section class="blog home">
<div class="inner">
	<h3 class="thin lined">Latest from the blog</h3>

  <?php if(param('tag')) {

    $tag = urldecode(param('tag'));
    $blog = $pages->find('blog')
                      ->children()
                      ->visible()
                      ->filterBy('tags', urldecode(param('tag')), ',')
                      ->flip()
                      ->paginate(1);

  } else {

    $blog = $pages->find('blog')
                      ->children()
                      ->visible()
                      ->flip()
                      ->paginate(1);

  } ?>

<?php foreach($blog as $article): ?>
  
  <div class="blog-articles">
  	<div class="title">
	    <h2><a href="<?php echo $article->url() ?>"><?php echo html($article->title()) ?></a></h2>
	    <time datetime="<?php echo $article->date('c') ?>" pubdate="pubdate"><?php echo $article->date('F j, Y') ?></time>
	</div>

	<div class="excerpt">
	    <p><?php echo excerpt($article->text(), 500) ?></p>
	    <p><a class="cta" href="<?php echo url('/') ?>work">Keep reading</a></p>    
    </div>
  </div>

  <?php endforeach ?>

</div>
</section>