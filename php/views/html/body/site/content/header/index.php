<?php $jsonData = json_decode(file_get_contents($__JSON__FOLDER__."/menu.json"), true); ?>
<div id="header" class="margin-bottom-4 border-bottom block-part">
	<div class="menu">
		<ul class="float-left" id="main-menu-left">
		<?php
			foreach($jsonData['main_menu_left'] as $row){
				echo '<li><a href="'.$row['link'].'">'.$row['text'].'</a></li>';
			}
		?>
		</ul>
		<ul class="float-right" id="main-menu-right">
		<?php
			foreach($jsonData['main_menu_right'] as $row){
				echo '<li><a href="'.$row['link'].'">'.$row['text'].'</a></li>';
			}
		?>
		</ul>		
		<div class="clear-both"></div>
	</div>
	<div id="text-head" class="padding26">
		<h1 class="site-owner"><a href="/"><?php echo $__SITE__TITLE__; ?></a></h1>
		<span class="site-measure">Share Everythings, just share</span>
	</div>
</div>