<?php

return function($site, $pages, $page) {
  $perpage  = $page->perpage()->int();
  $articles = $page->children()
                   ->visible()
                   ->flip()
                   ->paginate(($perpage >= 1) ? $perpage : 5);

  if ($tag = param('tag')) {
    $articles = $articles->filterBy('tags', $tag, ',');
  }

  $tags = $articles->pluck('tags', ',', false);

  return [
    'articles'   => $articles,
    'pagination' => $articles->pagination(),
    'tags'       => $tags,
    'tag'        => $tag,
  ];
};
