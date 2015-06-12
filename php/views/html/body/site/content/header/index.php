<div id="header">
	<div class="menu">
		<ul>
		<?php
			$jsonData = json_decode(file_get_contents($__JSON_FOLDER__."/menu.json"), true);
			foreach($jsonData['menu'] as $row){
				echo '<li><a href="'.$row['link'].'">'.$row['text'].'</a></li>';
			}
		?>
		</ul>
	</div>
	<div id="slogan">
		<h1>Hai!! :) Welcome to my site</h1>
		<h3>Just share</h3>
	</div>
</div>