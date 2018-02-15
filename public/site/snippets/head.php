<?php
  $title = join(' | ', [
    $page->title(),
    $site->title(),
  ]);

  $description = $page->description() ? $page->description() : $site->description();
  $og_image = $page->og_image()->toFile() ? $page->og_image() : $site->og_image();
  $twitter_image = $page->twitter_image()->toFile() ? $page->twitter_image() : $site->twitter_image();
?>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <?php if ($title) : ?>
    <title><?= $title; ?></title>
  <?php endif; ?>

  <?php if ($description->isNotEmpty()) : ?>
    <meta name="description" content="<?= $description; ?>">
  <?php endif; ?>

  <?php if ($page->title()->isNotEmpty()) : ?>
    <meta property="og:title" content="<?= $page->title(); ?>" />
  <?php endif; ?>

  <meta property="og:url" content="<?= $page->url() ?>" />

  <?php if ($image = $og_image->toFile()) : ?>
    <meta property="og:image" content="<?= $image->resize(1200, 630)->url(); ?>" />
  <?php endif; ?>

  <?php if ($description->isNotEmpty()) : ?>
    <meta property="og:description" content="<?= $description ?>" />
  <?php endif; ?>

  <meta property="og:type" content="website" />

  <?php if ($site->title()->isNotEmpty()) : ?>
    <meta property="og:site_name" content="<?= $site->title(); ?>" />
  <?php endif; ?>

  <?php if ($image = $twitter_image->toFile()) : ?>
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:image" content="<?= $image->resize(1200, 600)->url(); ?>">
  <?php else : ?>
    <meta name="twitter:card" content="summary">
  <?php endif; ?>

  <?php if ($page->title()->isNotEmpty()) : ?>
    <meta name="twitter:title" content="<?= $page->title(); ?>">
  <?php endif; ?>

  <?php if ($description->isNotEmpty()) : ?>
    <meta name="twitter:description" content="<?= $description ?>">
  <?php endif; ?>

  <?php if ($image = $site->favicon()->toFile()) : ?>
    <link rel="icon" type="image/png" href="<?= $image->resize(32, 32)->url(); ?>" />
  <?php endif; ?>

  <?php if ($image = $site->touch_icon()->toFile()) : ?>
    <link rel="apple-touch-icon" href="<?= $image->resize(57, 57)->url(); ?>" />
    <link rel="apple-touch-icon" sizes="72x72"   href="<?= $image->resize(72, 72)->url(); ?>" />
    <link rel="apple-touch-icon" sizes="114x114" href="<?= $image->resize(114, 114)->url(); ?>" />
    <link rel="apple-touch-icon" sizes="144x144" href="<?= $image->resize(144, 144)->url(); ?>" />
    <link rel="apple-touch-icon" sizes="192x192" href="<?= $image->resize(192, 192)->url(); ?>" />
  <?php endif; ?>

  <?php foreach($site->languages() as $language): ?>
    <?php if ($site->language() !== $language) : ?>
      <link rel="alternate" hreflang="<?= $language->code(); ?>" href="<?= $page->url($language->code()); ?>" />
    <?php endif; ?>
  <?php endforeach ?>

  <link rel="alternate" type="application/rss+xml" href="<?= url('blog/feed'); ?>" title="Blog Feed" />

  <?= css('assets/css/style.css'); ?>

</head>
