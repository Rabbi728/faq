<?php
use Rabbi\Query\Category;
use Rabbi\Query\Faq;

$faq = new Faq();
$category = new Category();

$list_values = $category->get_cat('FAQ Category');
$faq_lists = $faq->get_faq('FAQ List');

?>

	<div class="cd-faq__items">
        <?php
        foreach ($list_values as $key => $list_value):
        ?>
		<ul id="<?= strtolower($list_value['cat_name'])?>" class="cd-faq__group">
			<li class="cd-faq__title"><h2><?= $list_value['cat_name']?></h2></li>
            <?php foreach ($faq_lists as $faq_list):
                if ($key == $faq_list['category']):
                ?>

			<li class="cd-faq__item">
				<a class="cd-faq__trigger" href="#0"><span><?= $faq_list['question']?></span></a>
				<div class="cd-faq__content">
          <div class="text-component">
            <p><?= $faq_list['answer']?></p>
          </div>
				</div> <!-- cd-faq__content -->
			</li>

            <?php
            endif;
            endforeach;
            ?>
		</ul> <!-- cd-faq__group -->
        <?php
        endforeach;
        ?>
	</div> <!-- cd-faq__items -->