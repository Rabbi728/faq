<?php
use Rabbi\Query\Category;
$category = new Category();

$list_values = $category->get('FAQ Category');
?>
<section class="cd-faq js-cd-faq container max-width-md margin-top-lg margin-bottom-lg">
	<ul class="cd-faq__categories">
        <?php
        foreach ($list_values as $list_value):
        ?>
		<li><a class="cd-faq__category truncate" href="#<?= strtolower($list_value['cat_name'])?>"><?= $list_value['cat_name']?></a></li>
        <?php
        endforeach;
        ?>
	</ul> <!-- cd-faq__categories -->