<nav>
  <ul>
    <?php foreach($pages->visible() as $item) : ?>
    <li>
      <?php if ($item->isOpen()) : ?>
        <span><?= $item->title(); ?></span>
      <?php else: ?>
        <a href="<?= $item->url(); ?>"><?= $item->title(); ?></a>
      <?php endif; ?>
    </li>
    <?php endforeach ?>

    <?php foreach($site->languages() as $language): ?>
      <li>
        <?php if ($site->language() === $language) : ?>
          <span><?= $language->name(); ?></span>
        <?php else : ?>
          <a href="<?= $page->url($language->code()) ?>"><?= $language->name(); ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
