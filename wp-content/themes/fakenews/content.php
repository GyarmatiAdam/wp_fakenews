<div class="blog-post">
<!--Contain the contents of one single post.-->
	<h2 class="blog-post-title"><?php the_title(); ?></h2>
	<p class="blog-post-meta"><?php the_date(); ?> by <a href="#"><?php the_author(); ?></a></p>
<!--post status displayed-->
    <p><?php
	if ( get_post_status ( $ID ) == 'private' ) {
		echo 'private';
	} else {
		echo 'public';
	}
    ?> </p>

 <?php the_content(); ?>

</div><!---->
