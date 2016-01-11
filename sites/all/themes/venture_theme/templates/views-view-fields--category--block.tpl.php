<?php
$term = $fields['name']->content;
$term_id = $fields['tid']->content;
?>

<h2>More Prezis under <?php print $term; ?></h2>
<?php print views_embed_view('other_prezi','block',$term_id) ?>