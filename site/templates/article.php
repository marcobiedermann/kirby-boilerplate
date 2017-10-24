<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <article>
        <h1><?= $page->title(); ?></h1>
        <?= $page->date($site->dateformat()); ?>
        <?= $page->text()->kirbytext(); ?>

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
