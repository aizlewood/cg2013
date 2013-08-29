
<section class="work home">
<div class="inner">

<h3 class="thin lined">Some selected work</h3>

 <ul>
  <?php foreach($data->children()->visible()->limit(3) as $project): ?>
  <li>
	 <h2 class="thin delta"><?php echo html($project->title()) ?></h2>
	 <h3 class="zeta thin"><?php echo kirbytext($project->blurb()) ?></h3>
    <figure>
     <a href="<?php echo $project->url() ?>"><img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" /></a>
    </figure>
  </li>
  <?php endforeach ?>
 </ul>
<p><a class="cta" href="<?php echo url('/') ?>work">View more work</a></p>

</div>
</section>