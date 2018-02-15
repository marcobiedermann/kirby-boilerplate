<?php snippet('header') ?>

  <main class="main">

    <div class="grid">

      <?php snippet('breadcrumb'); ?>

      <h1><?= $page->title(); ?></h1>
      <?= $page->text()->kirbytext(); ?>

      <?php if ($alert) : ?>
        <ul class="alerts">
          <?php foreach($alert as $message) : ?>
            <li class="alert"><?= $message; ?></li>
          <?php endforeach; ?>
        </ul>
      <?php endif; ?>

      <form method="post" class="form">

        <div class="form__field">
          <label for="name">Name <abbr title="required">*</abbr></label>
          <input type="text" id="name" name="name">
        </div>

        <div class="form__field">
          <label for="email">Email <abbr title="required">*</abbr></label>
          <input type="email" id="email" name="email" required>
        </div>

        <div class="form__field">
          <label for="text">Text <abbr title="required">*</abbr></label>
          <textarea id="text" name="text" required></textarea>
        </div>

        <input type="submit" name="submit" value="Submit">

      </form>

    </div>

  </main>

<?php snippet('footer') ?>
