<?php

require_once('../inc/config.php');

$pageTitle = "Music Projects";

include(ROOTPATH . 'inc/header.php');
include(ROOTPATH . 'inc/nav.php');
?>
	<ul class="main gallery">

			<li><a href="http://engagedartasu.wordpress.com/home-in-the-desert/"><img src="<?php echo BASEURL . '/img/education_small.jpg';?>" alt="Picture of At Home In The Desert Performance"></a></li>

			<li><a href="http://dance.asu.edu/degrees/undergrad/bfa_curriculum.php"><img src="<?php echo BASEURL . '/img/collaboration_small.jpg';?>" alt="Image of ASU Urban Movement Activity"></a></li>

			<li><a href="http://herbergerinstitute.asu.edu/institute/initiatives/urbansol/"><img src="<?php echo BASEURL . '/img/community.jpg';?>" alt="Picture of Urban Sol"></a></li>

			<li><a href="http://civildisobedience.asu.edu/"><img src="<?php echo BASEURL . '/img/spaces_small.jpg';?>" alt="Image of graffiti alley"></a></li>

			<li><a href="../Portfolio/MusicPair/index.html"><img src="<?php echo BASEURL . '/img/MusicPairLogo2.png';?>" alt="MusicPair.com logo"></a></li>

		</ul>

<?php 

include(ROOTPATH . 'inc/footer.php');

?>