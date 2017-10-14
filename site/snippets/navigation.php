<nav class="navigation">
  <ul class="navigation__list navigation__list--inline">
    <?php foreach($pages->visible() as $item) : ?>
    <li class="navigation__item">
      <?php if ($item->isActive()) : ?>
        <span class="navigation__link navigation__link--is-active"><?= $item->title(); ?></span>
      <?php else: ?>
        <a href="<?= $item->url(); ?>" class="navigation__link"><?= $item->title(); ?></a>
      <?php endif; ?>
    </li>
    <?php endforeach ?>

    <?php foreach($site->languages() as $language): ?>
      <li class="navigation__item">
        <?php if ($site->language() === $language) : ?>
          <span class="navigation__link"><?= $language->name(); ?></span>
        <?php else : ?>
          <a href="<?= $page->url($language->code()) ?>" class="navigation__link"><?= $language->name(); ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach ?>
  </ul>
</nav>
