<?php
/*
Template Name: Partenaire
*/

get_header(); 
$categories = ['partenaires institutionnels', 'associations', 'organismes_formations', 'entreprises'];

while (have_posts()) {
	  the_post(); ?>
	  <h2><?php the_title(); ?></h2>
	  <?php the_content();
} ?>
 
<div class="partenaires-container">
  <?php
  foreach ($categories  as $category) {
    $the_query = new WP_Query( array( 'category_name' => $category ) ); 
    while($the_query->have_posts()) {
      ?>
      <div class="partenaires-page">
          <?php $the_query->the_post(); ?>
          <h3><?php the_title(); ?></h3>
          <?php the_content(); ?>
      </div>
   <?php
   }
  }
   ?>
</div>

<?php get_footer();