<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <h1><?= $page->title(); ?></h1>

      <?php if ($articles->count()) : ?>

        <ol>
          <?php foreach($articles as $article) : ?>
            <li>
              <article>
                <h2><a href="<?= $article->url(); ?>"><?= $article->title(); ?></a></h2>
                <?= $article->date($site->dateformat()); ?>
                <?= excerpt($article->text(), $page->excerptLength()->int(), 'words'); ?>
              </article>
            </li>
          <?php endforeach; ?>
        </ol>

        <?php snippet('pagination'); ?>

      <?php endif; ?>

    </div>

  </main>

<?php snippet('footer') ?>
