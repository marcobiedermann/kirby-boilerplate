<ul class="breadcrumb">
  <?php foreach($site->breadcrumb() as $page) : ?>
  <li class="breadcrumb__item">
    <?php if ($page->isActive()) : ?>
      <span class="breadcrumb__link breadcrumb__link--is-active"><?= $page->title(); ?></span>
    <?php else : ?>
      <a href="<?= $page->url(); ?>" class="breadcrumb__link"><?= $page->title(); ?></a>
    <?php endif; ?>
  </li>
  <?php endforeach ?>
</ul>
