<form action="<?= $pages->find('search')->url(); ?>">
  <input type="search" name="query" value="<?= esc($query); ?>">
  <input type="submit" value="Search">
</form>
