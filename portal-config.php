<?php
/* 
portal-config.php

Used to store all of our WEB162 configuration information

*/

//echo basename($_SERVER['PHP_SELF']);

define('THIS_PAGE',basename($_SERVER['PHP_SELF']));

//echo THIS_PAGE;

//die;


switch(THIS_PAGE){
        
        case'index.php':
            $title = 'dlb Home Page';
            $logo = 'fa-home';
            $banner = 'Nice To Meet You';
    break;
        
        case'contact.php':
            $title = 'dlb Contact Page';
            $logo = 'fa-phone';
            $banner = 'Hope To Hear From You Soon';
    break;
        
        case'resume.php':
            $title = 'dlb Resumes Page';
            $logo = 'fa-book';
            $banner = 'Qualified Positions';
    break;
        
        case'web_dev_resume.php':
            $title = 'dlb Web Development Page';
            $logo = 'fa-code';
            $banner = 'I Could Start Today';
    break;
        
        case'google_maps.php':
            $title = 'dlb Live Google Maps Page';
            $logo = 'fa-map-marker';
            $banner = 'Now You Know How to Find Me';
    break;
        
        case'facebook_cert.php':
            $title = 'dlb Facebook Certified Page';
            $logo = 'fa-certificate';
            $banner = 'Advanced Digital Marketing Technology';
    break;
        
        case'facebook_course.php':
            $title = 'dlb Facebook Course Requirements Page';
            $logo = 'fa-cog';
            $banner = 'Facebook Ad Manager, Mailchimp, & Analytics';
    break;
        
        case'flexbox.php':
            $title = 'dlb Research Flexbox Page';
            $logo = 'fa-box';
            $banner = 'College Research Paper';
    break;
        
        case'galleries.php':
            $title = 'dlb Research Galleries Page';
            $logo = 'fa-search';
            $banner = 'College Research Paper';
    break;
        
        case'Shoping_cart.php':
            $title = 'dlb Research Shopping Cart Page';
            $logo = 'fa-shopping-cart';
            $banner = 'College Research Paper';
    break;
        
        case'responsive_app.php':
            $title = 'dlb Research Responsive vs App Page';
            $logo = 'fa-cog';
            $banner = 'College Research Paper';
    break;
        
        
        
    default:
            $title = THIS_PAGE;    
            $logo = 'fa-smile';
            $banner ='Thank You';
        
}





?>