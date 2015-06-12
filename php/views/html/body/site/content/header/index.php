<div id="header">
	<div class="menu">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="#">Lib</a></li>
			<li><a href="#">Lang</a></li>
			<li><a href="#">About</a></li>
		</ul>
	</div>
	<div id="slogan">
		<h1>Hai!! :) Welcome to my site</h1>
		<h3>Just share</h3>
	</div>
</div>
<?php
	echo file_get_contents($__JSON_FOLDER__."/menu.json");	
?>