<footer class="footer">

<nav class="" >
           
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
			</button>			
				<a href="index.html">
			<div id="navigation" class="" >

                <?php
                if(function_exists('the_custom_logo')){
                    
                    $custom_logo_id = get_theme_mod ('custom_logo');
                    $logo = wp_get_attachment_image_src($custom_logo_id);
                }
                ?>
                
            </a>
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="">%3$s</ul>'
                        )
                            
                    );
                ?>
				<hr>
				

                <?php 
                dynamic_sidebar('sidebar-1');
                ?>

			</div>
		</nav>

</footer>
       
   </div>
   
<?php
		wp_footer();
	?>

</body>
</html> 