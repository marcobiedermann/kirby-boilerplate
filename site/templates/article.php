<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <article>
        <h1><?= $page->title(); ?></h1>
        <?= $page->date($site->dateformat()); ?>
        <?= $page->text()->kirbytext(); ?>
      </article>

    </div>

  </main>

<?php snippet('footer') ?>
