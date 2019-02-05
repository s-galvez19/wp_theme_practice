<?php
    /**
     * The header for our theme
     * 
     * @package mytheme_scratch_theme
     * 
     */
?>
<!-- bootstrap marckup -->
<!-- provide the html -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo('charset');?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
</head>
<body <?php body_class();?>>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header page-scroll">
            <a href="<?php echo esc_url(home_url('/'));?>" rel="home" class="navbar-brand"><?php bloginfo('name');?></a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="navbar-nav ml-auto">
                <?php wp_nav_menu(array('menu' => 'Top Menu', 'items_wrap' => '%3$s', 'container' => false, 'list_item_class' => "nav-item", 'link_class' => "nav-link"));?>
            </ul>
        </div>
    </div>
    </nav>
    <?php dynamic_header();?>
    <div class="container">
    <div class="row">