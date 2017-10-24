<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <h1><?= $page->title(); ?></h1>

      <?php if ($articles->count()) : ?>

        <ol>
          <?php foreach($articles as $article) : ?>
            <li>
              <article>
                <h2><a href="<?= $article->url(); ?>"><?= $article->title(); ?></a></h2>
                <?= $article->date($site->dateformat()); ?>
                <?= excerpt($article->text(), $page->excerptLength()->int(), 'words'); ?>

                <footer class="article__footer">

                  <?php if ($tags = $article->tags()->split()) : ?>
                    <ul class="tags">
                      <?php foreach($tags as $tag) : ?>
                        <li>
                          <a href="<?= page('blog')->url() . '/' .  url::paramsToString(['tag' => $tag]) ?>" class="tag"><?= $tag; ?></a>
                        </li>
                      <?php endforeach; ?>
                    </ul>
                  <?php endif; ?>

                </footer>
              </article>
            </li>
          <?php endforeach; ?>
        </ol>

        <?php snippet('pagination'); ?>

      <?php endif; ?>

    </div>

  </main>

<?php snippet('footer') ?>
