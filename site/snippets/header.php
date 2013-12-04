<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
<meta name="description" content="<?php echo html($site->description()) ?>" />
<meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
<meta name="robots" content="index, follow" />
<link rel="alternate" type="application/rss+xml" href="<?php echo url('blog/feed') ?>" title="Blog Feed" />
<link rel="canonical" href="<?php echo html($page->url()) ?>" />  
<meta name="title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="author" content="<?php echo html($site->author()) ?>" />
<meta name="publisher" content="<?php echo html($site->author()) ?>" />
<meta name="copyright" content="<?php echo html($site->author()) ?>" />
<meta name="description" content="<?php echo html($page->description()) ?>" />
<meta name="robots" content="index,follow" />
<meta name="DC.Title" content="<?php echo html($page->title()) ?> | <?php echo html($site->title()) ?>" />
<meta name="DC.Creator" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Rights" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Publisher" content="<?php echo html($site->author()) ?>" />
<meta name="DC.Description" content="<?php echo html($page->description()) ?>"/ >
<meta name="DC.Language" content="en" />
<?php echo css('assets/styles/main.css') ?>
<?php foreach($page->files()->findByExtension('css') as $css): ?>
<?php echo css($css->url()) ?>
<?php endforeach ?>
<?php foreach($page->files()->findByExtension('js') as $js): ?>
<?php echo js($js->url()) ?>
<?php endforeach ?>
</head>
<script type="text/javascript">
WebFontConfig = { fontdeck: { id: '26273' } };

(function() {
  var wf = document.createElement('script');
  wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
  '://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
  wf.type = 'text/javascript';
  wf.async = 'true';
  var s = document.getElementsByTagName('script')[0];
  s.parentNode.insertBefore(wf, s);
})();
</script>
<body>

  <?php if ($page->isHomepage()): ?>
  <header class="masthead home">
    <h1 class="logo">
      <a href="<?php echo url('/') ?>"><img src="/assets/images/logo-cg.png" alt="CarbonGraffiti"></a>
    </h1>
  </header>
   <?php else: ?>

  <header class="masthead">
    <h1 class="logo">
      <a href="<?php echo url('/') ?>"><img src="/assets/images/logo-cg.png" alt="CarbonGraffiti"></a>
    </h1>
    <?php snippet('menu') ?>
  </header>

  <?php endif ?>

<div class="animated FadeIn container <?php echo $page->template() ?>">
