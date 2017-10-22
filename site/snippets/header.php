<!doctype html>
<html lang="<?= site()->language() ? site()->language()->code() : 'en' ?>">
<?php snippet('head'); ?>
<body>

  <header class="header" role="banner">

    <div class="grid">

      <?php if ($image = $site->logo()->toFile()) : ?>
        <a href="<?= $site->language()->url(); ?>">
          <img src="<?= $image->url(); ?>">
          </a>
      <?php endif; ?>

      <?php snippet('navigation'); ?>

    </div>

  </header>
