<?php snippet('header') ?>


<section class="intro home">

<div class="inner">
  <article>
    <h1 class="beta thin"><?php echo html($page->title()) ?></h1>
    <h2 class="epsilon"><?php echo html($page->subtitle()) ?></h2>
    <h3 class="thin"><?php echo html($page->blurb()) ?></h3>
  </article>
</div>
</section>


<?php foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));} ?>

<?php snippet('footer') ?>