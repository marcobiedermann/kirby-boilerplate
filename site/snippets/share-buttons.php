<ul>
  <li>
    <a href="http://www.facebook.com/sharer.php?u=<?= rawurlencode($page->url()); ?>" target="blank" title="Share on Facebook" rel="noopener">Share on Facebook</a>
  </li>
  <li>
    <a href="https://plusone.google.com/_/+1/confirm?url=<?= rawurlencode($page->url()); ?>&title=<?= rawurlencode($page->title()); ?>" target="blank" title="Share on Google+" rel="noopener">Share on Google+</a>
  </li>
  <li>
    <a href="https://twitter.com/intent/tweet?source=webclient&text=<?= rawurlencode($page->title()); ?>%20<?= rawurlencode($page->url()); ?>%20<?= ('via @your_account')?>" target="blank" title="Tweet this" rel="noopener">Tweet</a>
  </li>
</ul>
