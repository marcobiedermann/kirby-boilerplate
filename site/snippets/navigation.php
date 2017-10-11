<nav>
  <ul>
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
