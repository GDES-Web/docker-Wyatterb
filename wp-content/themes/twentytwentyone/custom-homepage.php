<?php
/*
 * Template Name: My custom homepage template
*/
get_header();
////////////

// Services Posts loop
echo '<h4>Services</h4>';
$args = array(
    'posts_per_page' => 3,
	'category_name'=> 'services'
);
$services = new WP_Query( $args );
while ( $services->have_posts() ) :
    $services->the_post();
    the_title( '<h4 class="example"></h4>' );
endwhile;

// Books Posts in between
echo '<h4>Books</h4>';
$args = array(
    'post_type' => 'book',
);
$books = new WP_Query( $args );
while ( $books->have_posts() ) :
    $books->the_post();
    the_title( '<h4 class="example"></h4>' );
endwhile;

echo '<div class="h1"> Div! </div>';
$args = array(
    'post_type' => 'div',
);

// Resume Services Posts loop
echo '<h4>More Services</h4>';
$args = array(
	'offset'	=> '3',
    'posts_per_page' => 3,
	'category_name'=> 'services'
);
$services = new WP_Query( $args );
while ( $services->have_posts() ) :
    $services->the_post();
    the_title( '<h4 class="example"></h4>' );
endwhile;

////////////
get_footer();