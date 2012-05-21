<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>
<?php 
	switch($fontsize){
		case 1:
			echo "<h1>";
			break;
		case 2:
			echo"<h2>";
			break;
		case 3:
			echo"<h3>";
			break;
		case 4:
			echo"<h4>";
			break;
	}

	if ($headline==2) {
		echo $pagename;
	} else {
		if (!empty($content)){
			echo htmlentities($content, ENT_QUOTES, APP_CHARSET);
		}
	}

	switch($fontsize){
		case 1:
			echo "</h1>";
			break;
		case 2:
			echo"</h2>";
			break;
		case 3:
			echo"</h3>";
			break;
		case 4:
			echo"</h4>";
			break;
	}
?>

