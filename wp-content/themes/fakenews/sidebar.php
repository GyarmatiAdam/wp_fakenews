<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About the Author:</h4>
    <!--displays details about the author -->
    <p>User level: <?php the_author_meta( 'user_level' ); ?> </p>
    <p>User name: <?php the_author_meta( 'display_name' ); ?> </p>
    <p>User email: <?php the_author_meta( 'user_email' ); ?> </p>
    <!-- <p>User hash password: <?php the_author_meta( 'pass' ); ?> </p> -->

  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>      
    <!-- List the archives here -->
    <?php wp_get_archives( 'type=monthly' ); ?><br>
    <ol class="list-unstyled">
    </ol>
  <div class="sidebar-module">

  </div>
  </div>
</div>
<!-- /.blog-sidebar -->