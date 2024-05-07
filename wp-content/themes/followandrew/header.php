<!DOCTYPE html>
<html lang="en"> 
<head>
    <title>Blog Site Template</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio Site">
    <meta name="author" content="">    
    <?php
    wp_head();
    ?>

</head> 

<body>
    
    <header class="header">	         
	    <nav class="nav" >		
            <a id="header-name" href="index.html">
                <div id="" class="nav" >
                        <p>Alec Martin</p>
                </div>
            </a>
                <?php 
                    wp_nav_menu(
                        array(
                            'menu' => 'primary',
                            'container' => '',
                            'theme_location' => 'primary',
                            'items_wrap' => '<ul id="" class="nav">%3$s</ul>'
                        )
                            
                    );
                ?>

                <?php 
                dynamic_sidebar('sidebar-1');
                ?>

			</div>
    </header>

    <div class="main-wrapper">
