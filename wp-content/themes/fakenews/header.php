<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?php echo get_bloginfo( 'name' ); ?></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
  <!-- tells dynamically, where the theme folder is -->
  <link href="<?php echo get_bloginfo( 'template_directory' );?>/blog.css" rel="stylesheet">
  <?php wp_head();?>
</head>

<body>
  <div class="container">
    <div class="row">
    <img src="/wp_fakenews/wp-content/themes/fakenews/images/fakenews.png" class="img-fluid" alt="fakenews">
        <h1>
        <!-- The blog’s home web address; set in General Options. -->
            <a href="<?php echo get_option('home'); ?>">
            <!-- blog name dynamically -->
            <?php bloginfo('name'); ?></a>
        </h1>
     <div class="description">
     <!-- Displays the “Tagline” set in Settings -->
       <?php bloginfo('description'); ?>
     </div>
     <div class="blog-masthead">
        <div class="container">
        <nav class="blog-nav">
            <p>Pages:</p>
            <a class="blog-nav-item active" href="#">Home</a>
            <!-- lists all pages -->
            <?php wp_list_pages( '&title_li=' ); ?>
        </nav>
        <nav class="blog-nav"><p>Categories:</p>
        <!-- lists all categories -->
            <?php wp_list_categories( '&title_li=' ); ?>
        </nav>
    </div>
  </div>
    </div>

    <div class="blog-header">
      <h1 class="blog-title"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><!--The WordPress address (URL)--></a><?php echo get_bloginfo( 'name' ); ?><!--Site title--></h1>
      <!-- Site taglin description-->
      <p class="lead blog-description"><?php echo get_bloginfo( 'description' ); ?></p>
    </div>