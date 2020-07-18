<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">

    <!-- Schema.org markup for Google+ -->
    <meta itemprop="name" content="The Name or Title Here">
    <meta itemprop="description" content="This is the page description">
    <meta itemprop="image" content="http://www.example.com/image.jpg">

    <!-- Twitter Card data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@publisher_handle">
    <meta name="twitter:title" content="Page Title">
    <meta name="twitter:description" content="Page description less than 200 characters">
    <meta name="twitter:creator" content="@author_handle">
    <!-- Twitter summary card with large image must be at least 280x150px -->
    <meta name="twitter:image:src" content="http://www.example.com/image.html">

    <!-- Open Graph data -->
    <meta property="og:title" content="Title Here" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="<?php echo get_permalink(); ?>" />
    <meta property="og:image" content="http://example.com/image.jpg" />
    <meta property="og:description" content="Description Here" />
    <meta property="og:site_name" content="dayseven.digital" />
    <meta property="article:published_time" content="2013-09-17T05:59:00+01:00" />
    <meta property="article:modified_time" content="2013-09-16T19:08:47+01:00" />
    <meta property="article:section" content="Article Section" />
    <meta property="article:tag" content="Article Tag" />
    <!--
    <methoda property="fb:admins" content="Facebook numberic ID" />
    -->

    <title><?php wp_title(); ?> <?php bloginfo( 'name' ); ?></title>
    <!-- Bootstrap core CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <?php include("includes/ga.php"); ?>
    <?php include("includes/ga-tag-manager.php"); ?>
