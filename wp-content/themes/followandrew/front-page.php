<?php 
get_header();
?>
    
		<article class="">
	    	<h1>Alec Martin</h1>

<?php
    $args = array(
        'post_type' => 'projects',
        'posts_per_page' => 10, // Number of posts to display
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $custom_query = new WP_Query($args);

    if ($custom_query->have_posts()) :
        while ($custom_query->have_posts()) : $custom_query->the_post();
            // Display the featured image
            if (has_post_thumbnail()) {
                the_post_thumbnail();
            }

            // Display the post title
            the_title('<h2>', '</h2>');

            // Display the post tags
            $tags = get_the_tags();
            if ($tags) {
                echo '<ul class="post-tags">';
                foreach ($tags as $tag) {
                    echo '<li>' . $tag->name . '</li>';
                }
                echo '</ul>';
            }

        endwhile;
        wp_reset_postdata();
    else :
        // No posts found
    endif;
?>



            
<?php
get_footer();
?>