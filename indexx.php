<?php get_header(); ?>
  <!-- Other Content here -->

<!-- First Container -->
<div class="container-fluid bg-1 text-center">
    <h3 class="margin">Who Am I?</h3>
    <img src="../wordpress/wp-content/themes/custom_themes/img/seokjin.jpeg" class="img-responsive img-circle margin" style="display:inline" alt="Bird" width="350" height="350">
    <h3>I'm an adventurer</h3>
  </div>
  
  <!-- Second Container -->
  <div class="container-fluid bg-2 text-center">
    <!-- <h3 class="margin">What Am I?</h3>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
    <a href="#" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-search"></span> Search
    </a> -->

  <?php if ( have_posts() ) : ?>
<?php while ( have_posts() ) : the_post(); ?>
  <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="post-header">
       <div class="date"><?php the_time( 'M j y' ); ?></div>
       <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
       <div class="author"><?php the_author(); ?></div>
    </div><!--end post header-->
    <div class="entry clear">
       <?php if ( function_exists( 'add_theme_support' ) ) the_post_thumbnail(); ?>
       <?php the_content(); ?>
       <?php edit_post_link(); ?>
       <?php wp_link_pages(); ?> </div>
    <!--end entry-->
    <div class="post-footer">
       <div class="comments"><?php comments_popup_link( 'Leave a Comment', '1 Comment', '% Comments' ); ?></div>
    </div><!--end post footer-->
    </div><!--end post-->
<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
    <div class="navigation index">
       <div class="alignleft"><?php next_posts_link( 'Older Entries' ); ?></div>
       <div class="alignright"><?php previous_posts_link( 'Newer Entries' ); ?></div>
    </div><!--end navigation-->
<?php else : ?>
<?php endif; ?>
</div>
  <!-- Third Container (Grid) -->
  <div class="container-fluid bg-3 text-center">    
    <h3 class="margin">Where To Find Me?</h3><br>
    <div class="row">
      <div class="col-sm-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <img src="../wordpress/wp-content/themes/custom_themes/img/birds1.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-4"> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <img src="../wordpress/wp-content/themes/custom_themes/img/birds2.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
      <div class="col-sm-4"> 
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        <img src="../wordpress/wp-content/themes/custom_themes/img/birds3.jpeg" class="img-responsive margin" style="width:100%" alt="Image">
      </div>
    </div>
  </div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>