<section class="work home">
 <h1><?php echo html($data->title()) ?></h1>
 <?php echo kirbytext($data->text()) ?>

<h3>Some selected work</h3>

 <ul>
  <?php foreach($data->children()->visible() as $project): ?>
  <li>
    <figure>
     <img src="<?php echo $project->images()->first()->url() ?>" alt="<?php echo html($project->title()) ?>" />
    </figure>
  </li>
  <?php endforeach ?>
 </ul>


<a href="#">View more work</a>

</section>