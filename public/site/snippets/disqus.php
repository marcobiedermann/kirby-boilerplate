<?php

  if (!isset($disqus_shortname))  die('Please pass the disqus shortname');
  if (!isset($disqus_title))      $disqus_title = $page->title();
  if (!isset($disqus_developer))  $disqus_developer = false;
  if (!isset($disqus_identifier)) $disqus_identifier = $page->uri();
  if (!isset($disqus_url))        $disqus_url = thisURL();

  $disqus_title     = addcslashes($disqus_title, "'");
  $disqus_developer = ($disqus_developer) ? 'true' : 'false';

?>

<div id="disqus_thread"></div>
<script>
  var disqus_shortname  = '<?= $disqus_shortname; ?>'; // required: replace example with your forum shortname
  var disqus_title      = '<?= html($disqus_title); ?>';
  var disqus_developer  = '<?= $disqus_developer; ?>'; // developer mode
  var disqus_identifier = '<?= $disqus_identifier; ?>';
  var disqus_url        = '<?= $disqus_url; ?>';

  (function() {
    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
    dsq.src = 'http://' + disqus_shortname + '.disqus.com/embed.js';
    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
  })();
</script>
