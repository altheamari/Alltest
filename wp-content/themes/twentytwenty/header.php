<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/assets/css/custom.css'; ?>">
	    <link rel="stylesheet" href="<?php echo get_template_directory_uri(). '/assets/css/owl.carousel.min.css'; ?>">
        
		<meta charset="UTF-8">
	    <title>ENVX</title>

	    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
	    
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	    <script src="<?php echo get_template_directory_uri(). '/assets/js/owl.carousel.min.js'; ?>"></script>   
	    <script src="<?php echo get_template_directory_uri(). '/assets/js/mainscript.js'; ?>"></script>   
	   
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>
	<!-- NAVBAR -->
    <nav class="nvbr">
        <div class="container-fluid nvbr__container">
            
            <div class="nvbr__div nvbr-logo">
                <img src="<?php echo get_template_directory_uri(). '/assets/img/envx-logo.png'; ?>" alt="ENVX" class="nvbr-logo__img">
            </div>
            
            <div class="nvbr__div nvbr-menu">
                <ul class="nvbr-menu__ul">
                    <li class="nvbr-menu__li"><a href="<?php echo get_site_url()?>" class="nvbr-menu__link"> <span class="nvbr-menu__span">Home</span> </a></li>
                    <li class="nvbr-menu__li"><a href="<?php echo get_site_url(). '/category/latest/'; ?>" class="nvbr-menu__link"> <span class="nvbr-menu__span">Blog</span></a></li>
                    <li class="nvbr-menu__li nvbr-menu-dropdown">
                        <a href="#" class="nvbr-menu__link">
                            <span class="nvbr-menu__span">Category</span>
                            <img src="<?php echo get_template_directory_uri(). '/assets/img/dropdown-caret.png'; ?>" alt="ENVX Product Category" class="nvbr-menu__caret">
                        </a>
                        <ul class="nvbr-menu-dropdown__ul ">
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="<?php echo get_site_url(). '/product-category/full-faced-helmet'; ?>" class="nvbr-menu-dropdown__link">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/img/full-face-helmet.png'; ?>" alt="FULL FACE HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">FULL FACE HELMET</span>
                                </a>
                            </li>
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="<?php echo get_site_url(). '/product-category/modular-helmet'; ?>" class="nvbr-menu-dropdown__link">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/img/modular-helmet.png'; ?>" alt="MODULAR HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">MODULAR HELMET</span>
                                </a>
                            </li>
                            <li class="nvbr-menu-dropdown__li  ">
                                <a href="<?php echo get_site_url(). '/product-category/half-face-helmet/'; ?>" class="nvbr-menu-dropdown__link">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/img/half-face-helmet.png'; ?>" alt="HALF FACE HELMET" class="nvbr-menu-dropdown__img">
                                    <span class="nvbr-menu-dropdown__span">HALF FACE HELMET</span>
                                </a>
                            </li>                                                        
                        </ul>
                    </li>
                    <li class="nvbr-menu__li"><a href="#" class="nvbr-menu__link"><span class="nvbr-menu__span">Contact</span></a></li>
                </ul>
            </div>

            <div class="nvbr__div nvbr-info">
                <div class="nvbr-info__div nvbr-currency">
                    <select name="" id="" class="nvbr-currency__select">
                        <option value="USD" class="nvbr-currency__choices">USD</option>
                        <option value="PHP" class="nvbr-currency__choices">PHP</option>
                    </select>
                </div>

                <div class="nvbr-info__div nvbr-search">
                    <form action="" class="nvbr-search__form">
                        <input type="text" class="nvbr-search__input" placeholder="Search">
                        <button class="nvbr-search__btn">
                            <img src="<?php echo get_template_directory_uri(). '/assets/img/search-icon.png'; ?>" alt="" class="nvbr-search__img">
                        </button>
                    </form>
                </div>

                <!-- <div class="nvbr-info__div nvbr-user">
                    <a href="#" class="nvbr-user__link nvbr-user__cart" data-toggle="modal" data-target="#miniCart">
                        <img src="assets/img/cart-icon.png" alt="" class="nvbr-user__img">
                        <span class="nvbr-cartnotif">1</span>
                    </a>
                    <a href="" class="nvbr-user__link nvbr-user__account">
                        <img src="assets/img/user-icon.png" alt="" class="nvbr-user__img">
                    </a>
                </div>    -->             
            </div>

            <div class="nvbr__div nvbr-hamburger">
                <div class="hamburger" id="navburger">
                    <span class="hamburger__span"></span>
                </div>
            </div>
        </div>
    </nav>

    <!-- NAVBAR MARGIN (FOR STICKY HEADER) -->
    <div class="nvbr-margin"></div>

    <!-- SIDEBAR (MOBILE) -->
    <aside class="sdbr">
        <div class="sdbr__div sdbr-logo">
            <img src="<?php echo get_template_directory_uri(). '/assets/img/envx-logo.png'; ?>" alt="ENVX" class="sdbr-logo__img">

            <div class="hamburger" id="sidebarburger">
                <span class="hamburger__span"></span>
            </div>            
        </div>

        <div class="sdbr__div sdbr-info">
            <div class="sdbr-info__div sdbr-search">
                <form action="" class="sdbr-search__form">
                    <input type="text" class="sdbr-search__input" name="search" placeholder="Search">
                    <button class="sdbr-search__btn">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/search-icon.png'; ?>" alt="" class="sdbr-search__img">
                    </button>
                </form>
            </div>            
        </div>

        <div class="sdbr__div sdbr-menu">
            <ul class="sdbr-menu__ul">
                <li class="sdbr-menu__li"><a href="<?php echo get_site_url()?>" class="sdbr-menu__link"><span class="sdbr-menu__span">Home</span></a></li>
                <li class="sdbr-menu__li"><a href="<?php echo get_site_url(). '/category/latest'; ?>" class="sdbr-menu__link"><span class="sdbr-menu__span">Blog</span></a></li>
                <li class="sdbr-menu__li sdbr-dropdown" id="productCategory">
                    <a href="#" class=" sdbr-menu__link ">
                        <span class="sdbr-menu__span">Category</span>
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/dropdown-caret.png'; ?>" alt="" class="sdbr-menu__caret" id="sdbrcaret" data-dropdown="productCategory">
                    </a>
                    <ul class="sdbr-dropdown__ul">
                        <li class="sdbr-dropdown__li">
                            <a href="<?php echo get_site_url(). '/product-category/full-faced-helmet'; ?>" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php echo get_template_directory_uri(). '/assets/img/full-face-helmet.png'; ?>" alt="FULL FACE HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">FULL FACE HELMET</span>
                            </a>
                        </li>
                        <li class="sdbr-dropdown__li">
                            <a href="<?php echo get_site_url(). '/product-category/modular-helmet'; ?>" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php echo get_template_directory_uri(). '/assets/img/modular-helmet.png'; ?>" alt="MODULAR HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">MODULAR HELMET</span>
                            </a>
                        </li>
                        <li class="sdbr-dropdown__li">
                            <a href="<?php echo get_site_url(). '/product-category/half-face-helmet'; ?>" class="sdbr-menu__link sdbr-dropdown__link">
                                <img src="<?php echo get_template_directory_uri(). '/assets/img/half-face-helmet.png'; ?>" alt="HALF FACE HELMET"  class="sdbr-dropdown__img">
                                <span class="sdbr-menu__span sdbr-dropdown__span">HALF FACE HELMET</span>
                            </a>
                        </li>                                                
                    </ul>
                </li>
                <li class="sdbr-menu__li"><a href="#" class="sdbr-menu__link"><span class="sdbr-menu__span">Contact</span></a></li>
            </ul>
        </div>

    </aside>

    <!-- SIDEBAR OVERLAY -->
    <div class="sdbr-overlay"></div>

		<header class="header" role="banner">

			        <div class="owl-carousel hdrcarousel">
            <div class="item">

                <!-- SLIDE -->
                <div class="hdrslide background">
                    <div class="container hdrslide__container">

                        <div class="hdrslide__div hdrslide-info">
                            <h1 class="hdrslide-info__title">Teixeira <br> Adventure</h1>
                            <p class="hdrslide-info__desc">Advanced Polycarbonate </p>
                            <p class="hdrslide-info__desc">Composite Shell</p>
                        </div>
                        
                        <div class="hdrslide__div hdrslide-pic">
                            <img src="<?php echo get_template_directory_uri(). '/assets/img/header-ftproduct.png'; ?>" alt="Teixeira Adventure" class="hdrslide-pic__img">
                        </div>
                        
                        <div class="hdrslid__div hdrslide-cta">
                            <div class="hdrslide-cta__div">
                                <p class="hdrslide-cta__p hdrslide-cta__p--color">Color <img src="<?php echo get_template_directory_uri(). '/assets/img/color-sample.png'; ?>" alt="" class="hdrslide-cta__img"></p>
                                <p class="hdrslide-cta__p">Price <span>$125.9</span></p>
                                <a href="<?php echo get_site_url(). '/product/teixeira-adventure'; ?>" class="btn-setup btn-setup--orange hdrslide-cta__btn">View Product</a>
                            </div>
                            <div class="hdrslide-cta__div hdrslide-ctashare">
                                <a href="#" class="btn-setup btn-setup--white hdrslide-cta__sharebtn">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/img/share-icon.png'; ?>" alt="Share Product">
                                </a>
                            </div>
                        </div>
                    
                    </div>
                </div>

            </div>

            <div class="item">

                <!-- SLIDE -->
                <div class="hdrslide background">
                    <div class="container hdrslide__container">

                        <div class="hdrslide__div hdrslide-info">
                            <h1 class="hdrslide-info__title">Teixeira <br> Adventure</h1>
                            <p class="hdrslide-info__desc">Advanced Polycarbonate </p>
                            <p class="hdrslide-info__desc">Composite Shell</p>
                        </div>
                        
                        <div class="hdrslide__div hdrslide-pic">
                            <img src="<?php echo get_template_directory_uri(). '/assets/img/header-ftproduct.png'; ?>" alt="Teixeira Adventure" class="hdrslide-pic__img">
                        </div>
                        
                        <div class="hdrslid__div hdrslide-cta">
                            <div class="hdrslide-cta__div">
                                <p class="hdrslide-cta__p hdrslide-cta__p--color">Color <img src="<?php echo get_template_directory_uri(). '/assets/img/color-sample.png'; ?>" alt="" class="hdrslide-cta__img"></p>
                                <p class="hdrslide-cta__p">Price <span>$125.9</span></p>
                                <a href="<?php echo get_site_url(). '/product/teixeira-adventure'; ?>" class="btn-setup btn-setup--orange hdrslide-cta__btn">View Product</a>
                            </div>
                            <div class="hdrslide-cta__div hdrslide-ctashare">
                                <a href="/product/teixeira-adventure/" class="btn-setup btn-setup--white hdrslide-cta__sharebtn">
                                    <img src="<?php echo get_template_directory_uri(). '/assets/img/share-icon.png'; ?>" alt="Share Product">
                                </a>
                            </div>
                        </div>
                    
                    </div>
                </div>

            </div>         
        </div>

		</header><!-- #site-header -->

		<?php
		// Output the menu modal.
		get_template_part( 'template-parts/modal-menu' );
