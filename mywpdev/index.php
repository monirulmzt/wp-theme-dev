<!DOCTYPE html>
<html lang="en">

<!-- Header Start -->

<?php
//get_header('top') ;
 get_header() ; 
 ?>
<!-- Header End -->

<body>
    <!-- Topbar Start -->
    <?php get_template_part( 'template-part/content', 'topbar' ); ?>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <?php get_template_part( 'template-part/content', 'nav' ); ?>
    <!-- Navbar End -->


    <!-- Hero Start -->
    <?php get_template_part( 'template-part/content', 'hero' ); ?>
    <!-- Hero End -->


    <!-- About Start -->
    <?php get_template_part( 'template-part/content', 'about' ); ?>
    <!-- About End -->
    

    <!-- Services Start -->
    <?php get_template_part( 'template-part/content', 'service' ); ?>
    <!-- Services End -->


    <!-- Appointment Start -->
    <?php get_template_part( 'template-part/content', 'appointment' ); ?>
    <!-- Appointment End -->


    <!-- Pricing Plan Start -->
    <?php get_template_part( 'template-part/content', 'pricing' ); ?>
    <!-- Pricing Plan End -->


    <!-- Team Start -->
    <?php get_template_part( 'template-part/content', 'team' ); ?>
    <!-- Team End -->


    <!-- Search Start -->
    <?php get_template_part( 'template-part/content', 'search' ); ?>
    <!-- Search End -->


    <!-- Testimonial Start -->
    <?php get_template_part( 'template-part/content', 'testimonial' ); ?>
    <!-- Testimonial End -->


    <!-- Blog Start -->
    <?php get_template_part( 'template-part/content', 'blog' ); ?>
    <!-- Blog End -->
    

    <!-- Footer Start -->
    <?php get_footer() ; ?>
    <!-- Footer End -->


   