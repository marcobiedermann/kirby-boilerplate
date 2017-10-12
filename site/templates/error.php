<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <h1><?= $page->title(); ?></h1>
      <?= $page->text()->kirbytext(); ?>

    </div>

  </main>

<?php snippet('footer') ?>
