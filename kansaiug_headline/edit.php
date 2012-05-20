<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>


<div class="ccm-block-field-group">
	<h2>見出し文字</h2>

	<?php echo $form->radio('headline',1,($headline == 1) or (!$headline)); ?> 任意テキスト
	<?php echo $form->radio('headline',2,($headline == 2)); ?>　ページタイトル
	
	<?php  echo $form->text('content', $content, array('style' => 'width: 95%;', 'maxlength' => '20')); ?>
</div>

<div class="ccm-block-field-group">
	<h2>文字の大きさ</h2>
	<?php 
	$options = array(
		'1' => '見出し１<h1>',
		'2' => '見出し２<h2>',
		'3' => '見出し３<h3>',
		'4' => '見出し４<h4>',
	);
	echo $form->select('fontsize', $options, $fontsize);
	?>
</div>


