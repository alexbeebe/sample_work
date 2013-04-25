<?php

// Programmer:	Alex Beebe
// Last Edited: 02/28/2013
// File Name:	about.php

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
		<link type="text/css" rel="stylesheet" href="data/about.css"/>
	</head>
	<body>
		<div id="allcontent">
			<p>
				<img id="header" src="images/logo.png" alt="Logo" />
			</p>
			<p id="navbar">
				<?php outputNavBar(); ?>
  			</p>
  			<div id="about">
  				<h1>About Me</h1>
  				<p>
  					My name is Michael Shields and I am a creative designer/3D artist. I was born May 10, 1991 and currently 
  					live in Vancouver, Washington. I graduated from ITT Technical institute with an associate’s degree in 
  					visual communication.  I am passionate about all kinds of visual design and am constantly inspired by my 
  					surroundings. I love what I do and I try my best to show it through my work.
  				</p>
  				<p>
  					When I’m not creating a masterpiece I like to spend my free time outdoors enjoying nature, hunting, 
  					fishing, listening to music, jamming on guitar, and watching/playing football. I’ve always been fascinated 
  					with video games, animated films, and the immense amount of digital artwork that is put into their creation.  
  				</p>
  				<h2>Skills</h2>
  				<ul>
  					<li>Graphic design</li>
					<li>2D/3D animation</li>
					<li>3D modeling</li>
					<li>Video editing</li>
					<li>Adobe CS</li>
					<ul>
						<li>InDesign</li>
						<li>Illustrator</li>
						<li>Photoshop</li>
						<li>Premiere</li>
						<li>After Effects</li>
						<li>Flash</li>
					</ul>
					<li>Autodesk</li>
					<ul>
						<li>3ds Max</li>
  					</ul>
  				</ul>
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