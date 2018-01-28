<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <article>
        <h1><?= $page->title(); ?></h1>
        <?= $page->date($site->dateformat()); ?>
        <?= $page->text()->kirbytext(); ?>

        <footer class="article__footer">

          <?php if ($tags = $page->tags()->split()) : ?>
            <ul class="tags">
              <?php foreach($tags as $tag) : ?>
                <li>
                  <a href="<?= page('blog')->url() . '/' .  url::paramsToString(['tag' => $tag]) ?>" class="tag"><?= $tag; ?></a>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>

        </footer>

        <?php
          if ($site->blog_comments_open()->bool()) {
            snippet('disqus', array(
              'disqus_shortname' => 'myawesomeblog',
              // 'disqus_developer' => true,
            ));
          }
        ?>

      </article>

    </div>

  </main>

<?php snippet('footer') ?>
