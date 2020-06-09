<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Blossom_Travel
 */
    /**
     * Doctype Hook
     * 
     * @hooked blossom_travel_doctype
    */
    do_action( 'blossom_travel_doctype' );
?>
<head itemscope itemtype="http://schema.org/WebSite">
	<?php 
    /**
     * Before wp_head
     * 
     * @hooked blossom_travel_head
    */
    do_action( 'blossom_travel_before_wp_head' );
    
    wp_head(); ?>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.typekit.net/kli2ugr.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Yesteryear&display=swap" rel="stylesheet"> -->
    <!-- custom button cdns -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- custom button cdns -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

<?php

    wp_body_open();
    
    /**
     * Before Header
     * 
     * @hooked blossom_travel_page_start - 20  
    */
    do_action( 'blossom_travel_before_header' );
    
    /**
     * Header
     * 
     * @hooked blossom_travel_header - 20       
     * @hooked blossom_travel_responsive_nav - 30    
    */
    do_action( 'blossom_travel_header' );
    
    /**
     * Before Content
     * 
     * @hooked blossom_travel_banner  - 25
     * @hooked blossom_travel_trending_section  - 30
     * @hooked blossom_travel_featured_section  - 35
    */
    do_action( 'blossom_travel_after_header' );
    
    /**
     * Content
     * 
     * @hooked blossom_travel_content_start
    */
    do_action( 'blossom_travel_content' );