<?php

// Programmer:	Alex Beebe
// Last Edited: 02/28/2013
// File Name:	home.php

require_once("includes/defines.php");

function readPageNames(&$page_names) {

	$page_names = array();
	$in_file = fopen("data/pages.csv", "r");

	do {
		$page = fgetcsv($in_file);
		if(!empty($page)) {
			$page_names[] = $page;
		}
	} while(!empty($page));

	fclose($in_file);
}
function outputNavBar() {

	readPageNames($page_names);

	for($page_index = 0; $page_index < count($page_names); $page_index++) {
		echo "    <a href='" . $page_names[$page_index][PAGE_PAGE_FIELD] . "'>" . $page_names[$page_index][PAGE_NAME_FIELD] . "<br/></a>";
	}
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />
		<title><?php echo HEADING?></title>
		<link type="text/css" rel="stylesheet" href="data/home.css"/>
	</head>
	<body>
		<div id="allcontent">
			<p>
				<img id="header" src="images/logo.png" alt="Logo"/>
			</p>
			<p id="navbar">
				<?php outputNavBar(); ?>
  			</p>
			<p id="picturecontainer">
				<img id="picture" src="images/picture.jpg" alt="Michael Shields"/>
			</p>
			<div id="right">
				<h1 id="name"><?php echo HEADING?></h1>
				<div id="mission">
					<p>
						I’m a recent college graduate from ITT Technical Institute with an associate’s degree in Visual 
						Communication. My specialties include graphic design, 2D and 3D animation, 3D modeling, and video 
						editing. My objective is to always find a harmonious balance between creativity and functionality.
					</p>
				</div>
			</div>
			<div id="contact">
				<p>
					<?php echo NAME . "<br/>" . EMAIL . "<br/>" . ADDRESS . "<br/>" . PHONE_NUMBER?>
				</p>
			</div>
			<div id="footer">
				<p>
					<?php echo "&copy; 2013, ".NAME?><br/>
					All trademarks and registered trademarks appearing on this site are the property of their respective owners.
				</p>
			</div>
		</div>
	</body>
</html>