<?php $jsonData = json_decode(file_get_contents($__JSON__FOLDER__."/menu.json"), true); ?>
<div id="header">
	<div class="menu">
		<ul style="float:left;">
		<?php
			foreach($jsonData['menu'] as $row){
				echo '<li><a href="'.$row['link'].'">'.$row['text'].'</a></li>';
			}
		?>
		</ul>
		<ul style="float:right">
			<li><a href="#">Facebook</a></li>
			<li><a href="#">Twitter</a></li>
			<li><a href="#">Contact</a></li>
		</ul>
	</div>
	<div style="clear:both;"/>
	<div id="slogan">
		<h1>Hai!! :) Welcome to my site</h1>
		<h3>Just share</h3>
	</div>
</div>