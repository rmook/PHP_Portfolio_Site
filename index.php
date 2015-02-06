<?php

require_once('inc/config.php');

$pageTitle = "Web Development";

include(ROOTPATH . 'inc/header.php');

?>
		<ul class="main">
			<li><a href="<?php echo BASEURL . "/Portfolio";?>"><img src="<?php echo BASEURL . '/img/websiteIcon.png';?>"><p>Portfolio</p></a></li>
			<li><a href="http://github.com/rmook"><img src="<?php echo BASEURL . '/img/githubIcon.png';?>"><p>Code</p></a></li>
			<li><a href="<?php echo BASEURL . "/img/MookITResume.pdf";?>"><img src="<?php echo BASEURL . '/img/listIcon.png';?>"><p>Resume</p></a></li>
			<li><a href="<?php echo BASEURL . "/Music";?>"><img src="<?php echo BASEURL . '/img/musicIcon.png';?>"><p>Music</p></a></li>
		</ul>

<?php 

include(ROOTPATH . 'inc/footer.php');

?>