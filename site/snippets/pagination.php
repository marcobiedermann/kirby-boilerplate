<?php if ($pagination->hasPages()) : ?>
  <ul class="pagination">

    <?php if ($pagination->hasPrevPage()) : ?>
      <li>
        <a href="<?= $pagination->prevPageURL(); ?>" rel="prev">Previous</a>
      </li>
    <?php endif; ?>

    <?php foreach ($pagination->range(5) as $page) : ?>
      <li>
        <?php if ($pagination->page() === $page) : ?>
          <span><?= $page; ?></span>
        <?php else : ?>
          <a href="<?= $pagination->pageURL($page); ?>"><?= $page; ?></a>
        <?php endif; ?>
      </li>
    <?php endforeach ?>

    <?php if ($pagination->hasNextPage()) : ?>
      <li>
        <a href="<?= $pagination->nextPageURL(); ?>" rel="next">Next</a>
      </li>
    <?php endif; ?>

  </ul>
<?php endif; ?>
