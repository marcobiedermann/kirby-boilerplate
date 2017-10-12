<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>
  <meta name="description" content="<?= $site->description()->html() ?>">

  <?php foreach($site->languages() as $language): ?>
    <?php if ($site->language() !== $language) : ?>
      <link rel="alternate" hreflang="<?= $language->code(); ?>" href="<?= $page->url($language->code()); ?>" />
    <?php endif; ?>
  <?php endforeach ?>

  <?= css('assets/css/style.css') ?>

</head>
