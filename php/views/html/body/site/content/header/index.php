<?php $jsonData = json_decode(file_get_contents($__JSON__FOLDER__."/menu.json"), true); ?>
<div id="header" class="margin-bottom-4">
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
	<div id="text-head" class="border">
		<h1 class="site-owner">Adi Winata's Site</h1>
		<h3 class="site-measure">Share Everythings, just share</h3>
	</div>
</div>