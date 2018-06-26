<ul>
  <?php foreach($children as $child) : ?>
    <?php if ($child->isVisible() && $child->template() !== 'article') : ?>
      <li>
        <?php if ($child->isActive()) : ?>
          <span class="navigation__link navigation__link--is-active"><?= $child->title(); ?></span>
        <?php else : ?>
          <a href="<?= $child->url(); ?>" class="navigation__link"><?= $child->title(); ?></a>
        <?php endif; ?>

        <?php
          snippet('submenu', [
            'children' => $child->children(),
          ]);
        ?>
      </li>
    <?php endif; ?>
  <?php endforeach; ?>
</ul>
