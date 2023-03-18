<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Tomáš Sýkora">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/4f92fa1c8d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">
    <title><?php bloginfo("name"); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header" class="iconHeader">
        <div class="container">

            <!-- BRAND -->
            <div class="branding">
                <a href="<?php bloginfo("url"); ?>">
                    <img draggable="false" src="/images/foxieLogo.svg" alt="foxieLogo">
                </a>
                <a href="<?php bloginfo("url"); ?>">
                    <h2>SOCIAL FOXIE</h2>
                </a>
            </div>
            <!-- HAMMENU -->
            <div class="hamburger-menu" id="hamburger-menu">
                <div class="bar">
    
                </div>
            </div>
            <!-- MOBILE-NAVBAR -->
            <div id="mobile-navbar">
                <ul>
                    <li><a href="/html/front-page.html" class="nav-link">Home<i class="fa-solid fa-house navbarIcon"></i></a></li>
                    
                    <li >
                        <!-- CATEGORIES-BTN -->
                        <a href="#" id="categoriesBtn">
                            Categories
                            <!-- CATEGORIES-ICON -->
                            <span class="material-symbols-outlined chevronIcon" id="chevronRight">
                                chevron_right
                            </span>
                        </a> 
                        <!-- CATEGORIES-LINKS -->
                        <ul id="categoriesLinks">
                            <li><a href="/html/category-page.html" class="nav-link">Instagram<i class="fa-brands fa-instagram navbarIcon"></i></a></li>
                            <li><a href="/html/category-page.html" class="nav-link">TikTok<i class="fa-brands fa-tiktok navbarIcon"></i></a></li>
                            <li><a href="/html/category-page.html" class="nav-link">Patreon<i class="fa-brands fa-patreon navbarIcon"></i></a></li>
                        </ul>
                    </li>
                    
                    <li><a href="/html/page-id-about.html" class="nav-link">About<i class="fa-solid fa-users navbarIcon"></i></a></li>
                </ul>
            </div>
            <!-- DESKTOP-NAVBAR -->
            <div class="navigation">
    
                <div id="desktop-navbar">
                    <ul>
                        <li><a href="/html/front-page.html" class="nav-link">Home<i class="fa-solid fa-house navbarIcon"></i></a></li>
                        
                        <li >
                            <!-- CATEGORIES-BTN -->
                            <a href="#" id="category">
                                Categories
                                <!-- CATEGORIES-ICON -->
                                <span class="material-symbols-outlined chevronIcon" id="chevronRightDesktop">
                                    chevron_right
                                </span>
                            </a> 
                            <!-- CATEGORIES-LINKS -->
                            <ul id="categoriesLinksDesktop">
                                <li><a href="/html/category-page.html"><div class="media">
                                    <i class="fa-brands fa-instagram navbarIcon"></i>Instagram
                                </div></a></li>

                                <li><a href="/html/category-page.html"><div class="media">
                                    <i class="fa-brands fa-tiktok navbarIcon"></i>TikTok
                                </div></a></li>
                                
                                <li><a href="/html/category-page.html"><div class="media">
                                    <i class="fa-brands fa-patreon navbarIcon"></i>Patreon
                                </div></a></li>
                            </ul>
                        </li>
                        
                        <li><a href="/html/page-id-about.html" class="nav-link">About<i class="fa-solid fa-users navbarIcon"></i></a></li>
                    </ul>
                </div>
                
                <div id="search-icon">
                        <!-- SEARCH-BAR -->
                        <div class="search">
                            <span class="material-symbols-outlined">
                                search
                            </span>
                        
                            <input type="search" name="search" placeholder="Search">
                        </div>
                        <!-- ICON -->
                        <div class="patreon">
                            <a href="#"><i class="fa-brands fa-patreon"></i></a>
                        </div>
                    
                </div>
    
            </div>

        </div>
    </header>