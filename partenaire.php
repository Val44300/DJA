<?php
/*
Template Name: Partenaire
*/

get_header(); 
$categories = ['partenaires institutionnels', 'associations'];
$categories2 = ['organismes_formations', 'entreprises'];

  while (have_posts()) {
	  the_post(); ?>
	  <h2><?php the_title(); ?></h2>
	  <?php the_content();
 } ?>
 
<div class="container-fluid">
  <div class="row">
    <?php
    foreach ($categories  as $category) {
      $the_query = new WP_Query( array( 'category_name' => $category ) ); 
      while($the_query->have_posts()) {
        ?>
        <div class="col-md-offset-2 col-md-4 col-xs-12 partenaires-page">
            <?php $the_query->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
     <?php
     }
    }
     ?>
  </div>

  <div class="row">
    <?php
    foreach ($categories2  as $category) {
      $the_query = new WP_Query( array( 'category_name' => $category ) ); 
      while($the_query->have_posts()) {
        ?>
        <div class="col-md-offset-2 col-md-4 col-xs-12 partenaires-page">
            <?php $the_query->the_post(); ?>
            <h3><?php the_title(); ?></h3>
            <?php the_content(); ?>
        </div>
     <?php
     }
    }
     ?>
  </div>

</div>

<?php get_footer();