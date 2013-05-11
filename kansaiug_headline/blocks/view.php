<?php  defined('C5_EXECUTE') or die("Access Denied."); ?>
<?php 
	$start_tag = '<h' . $fontsize . '>';
	$end_tag = '</h' . $fontsize . '>';

	if ($headline==2) {
		$content = $pagename;
	}
?>

<?php echo $start_tag; //hタグ ?>
	<?php echo htmlentities($content, ENT_QUOTES, APP_CHARSET); ?>
<?php echo $end_tag;  //h綴じタグ ?>