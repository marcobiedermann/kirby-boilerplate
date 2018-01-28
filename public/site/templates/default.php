<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <h1><?= $page->title(); ?></h1>
      <?= $page->text()->kirbytext(); ?>

    </div>

  </main>

<?php snippet('footer') ?>
