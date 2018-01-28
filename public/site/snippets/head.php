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

  <?php  if ($image = $site->favicon()->toFile()) : ?>
    <link rel="icon" type="image/png" href="<?= $image->resize(32, 32)->url(); ?>" />
  <?php endif; ?>

  <link rel="alternate" type="application/rss+xml" href="<?= url('blog/feed'); ?>" title="Blog Feed" />

  <?php if ($image = $site->touch_icon()->toFile()) : ?>
    <link rel="apple-touch-icon" href="<?= $image->resize(57, 57)->url(); ?>" />
    <link rel="apple-touch-icon" href="<?= $image->resize(72, 72)->url(); ?>" sizes="72x72" />
    <link rel="apple-touch-icon" href="<?= $image->resize(114, 114)->url(); ?>" sizes="114x114" />
    <link rel="apple-touch-icon" href="<?= $image->resize(144, 144)->url(); ?>" sizes="144x144" />
    <link rel="apple-touch-icon" href="<?= $image->resize(192, 192)->url(); ?>" sizes="192x192" />
  <?php endif; ?>

  <?= css('assets/css/style.css') ?>

</head>
