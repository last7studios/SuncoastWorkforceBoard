<?php 
$sub = $_GET['sub'];

//The following line needs to be replaced with dynamic content
$pageTitle = 'Community Partners & Resources';
//The above line needs to be replace with dynamic content
?>
<div class="bannerContainer">
    <div class="bannerContainerContent">
        <img src="<?=IMAGE_PATH?>subSectionHeaderColor/<?=$sub?>.png" />
    </div>
    
    <div class="bannerContainerWords">
    	<!-- Echos the title of the page from the CMS HERE-->
    	<h1 class="pageHeader"><?= $pageTitle?></h1>
    </div>
   <div class="clear"></div>
</div>