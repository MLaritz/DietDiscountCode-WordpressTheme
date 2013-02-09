<!DOCTYPE html>
<html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?></title>

	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">

    <link href='http://fonts.googleapis.com/css?family=Asap:400,700|Open+Sans:400,700' rel='stylesheet'>
    <link href='<?php echo get_template_directory_uri() . '/style.css' ?>' rel='stylesheet'>
	<?php wp_head(); ?>
</head>
<body>
	<header>
		<div class="wrapper">
			<h1>
				<a href="<?php echo home_url(); ?>">
					<img src="<?php echo get_template_directory_uri(); ?>/img/dietdiscountcode.png" alt="Diet Discount Code Logo">
				</a>
                <a class="nav-btn" href="#nav"><span class="icon-menu"></span></a>
			</h1>
		</div>
        <nav id="nav">
            <?php wp_nav_menu( array( 'theme_location' => 'main', 'menu' => 'main' ) ); ?>
            <select id="categoryMenu">
                <option>Select a Category</option>
                <?php
                $categories = get_categories();
                foreach ($categories as $category) {
                    echo '<option value="' .get_category_link($category->term_id) . '">' . $category->name . '</option> ';
                }
                ?>
            </select>
            <a class="close-btn" href="#top"><span class="icon-cancel"></span></a>
        </nav>
	</header>
    <div class="headerBreak"></div>
	<div class="wrapper">
