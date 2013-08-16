<?php snippet('header') ?>


<section class="content">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <h2><?php echo html($page->subtitle()) ?></h2>
    <p><?php echo html($page->blurb()) ?></p>
  </article>

<?php snippet('menu') ?>


</section>


<?php foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));} ?>

<?php snippet('footer') ?>