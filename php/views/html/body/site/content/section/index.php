<?php $jsonData = json_decode(file_get_contents($__JSON__FOLDER__."/post.json"), true); ?>
<div id="section" class="margin-top-bottom-4 padding26">
	<div id="side-content" class="float-left block-part">
        <div class="border side-block">
            <div class="side-header border-bottom">
                <label>Profile</label>
            </div>
            <div class="side-content">
                <img src="images/pp.jpg" width="80" id="pp-img"></img>
                <p>
                    Name: Adi Winata<br/>
                    Skill: c#, asp.net, javascript, ajax<br/>
                    Music: Blues & Rock<br/>
                    Others: Science, 3D Programming
                </p>
                <div class="clear-both"></div>
            </div>
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
			