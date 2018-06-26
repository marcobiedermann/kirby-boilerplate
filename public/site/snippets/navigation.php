

<nav class="navigation">
  <ul class="navigation__list navigation__list--inline">
    <?php $links = explode(', ', $site->navigation_main()); ?>
    <?php foreach($links as $link) : ?>
      <?php if (page($link)->isVisible()) : ?>
        <li class="navigation__item">
          <?php if (page($link)->isActive()) : ?>
            <span class="navigation__link navigation__link--is-active"><?= page($link)->title(); ?></span>
          <?php else: ?>
            <a href="<?= page($link)->url(); ?>" class="navigation__link"><?= page($link)->title(); ?></a>
          <?php endif; ?>
          <?php
            snippet('submenu', [
              'children' => page($link)->children(),
            ]);
          ?>
        </li>
      <?php endif; ?>
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
