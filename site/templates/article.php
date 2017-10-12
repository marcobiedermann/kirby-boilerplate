<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <article>
        <h1><?= $page->title(); ?></h1>
        <?= $article->date($site->dateformat()); ?>
        <?= $page->text()->kirbytext(); ?>
      </article>

    </div>

  </main>

<?php snippet('footer') ?>
