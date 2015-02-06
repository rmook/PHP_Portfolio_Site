<?php

require_once('../inc/config.php');

$pageTitle = "Portfolio";

include(ROOTPATH . "inc/header.php");
include(ROOTPATH . 'inc/nav.php');

?>
		<ul class="gallery">
			<li><a href="http://www.cubpack273.org"><img src="<?php echo BASEURL . '/img/pack273.png';?>" alt="image of cub scout pack 273 website"></a></li>
			<li><a href="site1/index.html"><img src="<?php echo BASEURL . '/img/portfolioScreen.png';?>" alt="image of another portfolio site"></a></li>
			<li><a href="zoo/main.html"><img src="<?php echo BASEURL . '/img/zooscreenshot.jpg';?>" alt="image of zoo website"></a></li>
			<li><a href="MusicPair/index.html"><img src="<?php echo BASEURL . '/img/MusicPairLogo2.png';?>" alt="logo of musicpair.com"></a></li>
		</ul>

<?php 

include(ROOTPATH . 'inc/footer.php');

?>