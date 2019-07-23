<div class="col-sm-3 col-sm-offset-1 blog-sidebar">
  <div class="sidebar-module sidebar-module-inset">
    <h4>About</h4>
    <!--displays description about the author -->
    <p><?php the_author_meta( 'description' ); ?> </p>
  </div>
  <div class="sidebar-module">
    <h4>Archives</h4>      
    <!-- List the archives here -->
    <?php wp_get_archives( 'type=monthly' ); ?><br>
    <ol class="list-unstyled">
    </ol>
  </div>
</div>
<!-- /.blog-sidebar -->