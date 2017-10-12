<?php snippet('header'); ?>

  <main class="main">

    <div class="grid">

      <?php snippet('search'); ?>

      <?php if ($results->count()) : ?>

        <ul>
          <?php foreach($results as $result) : ?>
          <li>
            <a href="<?= $result->url(); ?>">
              <?= $result->title()->html(); ?>
            </a>
          </li>
          <?php endforeach; ?>
        </ul>

        <?php snippet('pagination'); ?>
      <?php endif; ?>

    </div>

  </main>

<?php snippet('footer'); ?>
