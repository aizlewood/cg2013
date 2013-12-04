<?php snippet('header') ?>


<section class="intro home">

<!-- <div class="inner"> -->
  <article>
    <?php echo kirbytext($page->blurb()) ?>
    <?php echo kirbytext($page->mini()) ?>
  </article>
<!--   <div class="circle1">&nbsp;</div>
  <div class="circle2">&nbsp;</div> -->
<!-- </div> -->
</section>

<div class="wrapper">
<?php foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));} ?>
</div>

<?php snippet('footer') ?>