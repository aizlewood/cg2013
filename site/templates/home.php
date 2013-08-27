<?php snippet('header') ?>


<section class="intro home">

  <article>
    <h1><?php echo html($page->title()) ?></h1>
    <h2><?php echo html($page->subtitle()) ?></h2>
    <p><?php echo html($page->blurb()) ?></p>
  </article>

</section>


<?php foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));} ?>

<?php snippet('footer') ?>