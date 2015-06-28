<?php $jsonData = json_decode(file_get_contents($__JSON__FOLDER__."/post.json"), true); ?>
<div id="section" class="margin-top-bottom-4 padding26">
	<div id="side-content" class="float-left block-part">
        <div class="border side-block">
            testing menu
        </div>
	</div>
	<div id="main-content">		
	<?php 
		foreach($jsonData['post'] as $row){			
			echo '<div class="post-article padding26 border block-part" data-id="'.$row['id'].'">';		
			echo '<h3 class="post-title"><a href="#">'.$row['title'].'</a></h3>';
			echo '<div class="post-attribute border-bottom">';
			echo '<span class="date-post">Date Post: <a href="#">'.$row['date_post'].'</a>, Author: <a href="https://www.facebook.com/adheegm" target="_blank">'.$row['author'].'</a></span>';
			echo '</div>';
			echo '<div class=post-content>';
			echo $row['content'];
			echo '</div>';
			echo '<div class="post-tag">';
			echo '</div>';
			echo '</div>';
		} 
	?>	
	</div>
</div>
			