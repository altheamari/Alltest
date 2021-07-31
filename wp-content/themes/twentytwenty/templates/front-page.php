<?php
/**
 * Template Name: Front Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header();
?>



    <!-- SIDEBAR OVERLAY -->
    <div class="sdbr-overlay"></div>




    <!-- NEW PRODUCTS -->
    <section class="newproducts">
        <div class="newproducts-header">
            <a href="#" class="newproducts-nav newproducts-nav--left">
                <img src="<?php echo get_template_directory_uri(). '/assets/img/left-arrow.png'; ?>" alt="" class="newproducts-nav__img">
            </a>
            <h2 class="newproducts-header__title"><span>New Products</span></h2>
            <a href="<?php echo get_site_url(). '/shop'; ?>" class="newproducts-nav newproducts-nav--right">
                <img src="<?php echo get_template_directory_uri(). '/assets/img/right-arrow.png'; ?>" alt="" class="newproducts-nav__img:src">
            </a>
        </div>

        <div class="owl-carousel product-carousel">

            <div class="item item-highlight">
                <div class="prcard prcard--highlight">
                    <div class="prcard__div prcard-info">
                        <h2 class="prcard-name__title">HJC CL-17 CAPTAIN AMERICA (SNELL)</h2>
                        <div class="prcard-info__div">
                            <p class="prcard-info__price">$350.5</p>
                            <a href="<?php echo get_site_url(). '/shop/?add-to-cart=48'; ?>" class="btn-setup btn-setup--orange prcard-info__btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="prcard__div prcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/HJC-CL-17-CAPTAIN-AMERICA-(SNELL).png'; ?>" alt="" class="prcard-pic__img">
                    </div>
                </div>                
            </div>

            <div class="item" >
                <div class="prcard">
                    <div class="prcard__div prcard-name">
                        <h2 class="prcard-name__title">ZEUS Z-806 NEW SUPERTECH II50 MATT</h2>
                    </div>
                    <div class="prcard__div prcard-info">
                        <p class="prcard-info__price">$350.5</p>
                        <a href="<?php echo get_site_url(). '/shop/?add-to-cart=49'; ?>" class="btn-setup btn-setup--orange prcard-info__btn">Buy Now</a>
                    </div>
                    <div class="prcard__div prcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/ZEUS-Z-806-NEW-SUPERTECH-II50-MATT.png'; ?>" alt="ZEUS Z-806 NEW SUPERTECH II50 MATT" class="prcard-pic__img">
                    </div>
                </div>                
            </div>

            <div class="item" >
                <div class="prcard">
                    <div class="prcard__div prcard-name">
                        <h2 class="prcard-name__title">ARAI TOUR CROSS 3 - DETOUR RED</h2>
                    </div>
                    <div class="prcard__div prcard-info">
                        <p class="prcard-info__price">$350.5</p>
                        <a href="<?php echo get_site_url(). '/shop/?add-to-cart=50'; ?>" class="btn-setup btn-setup--orange prcard-info__btn">Buy Now</a>
                    </div>
                    <div class="prcard__div prcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/ARAI-TOUR-CROSS-3---DETOUR-RED.png'; ?>" alt="ARAI TOUR CROSS 3 - DETOUR RED" class="prcard-pic__img">
                    </div>
                </div>                
            </div>            
        </div>        
    </section>
    
    <!-- BLOGS AND ADS -->
    <section class="blogsads" >
        <div class="container blogsads__container">

            <!-- BLOGS -->
            <div class="blogsads__div blogsads__div--blogs">
                <div class="blogs-header">
                    <h2 class="blogs-header__title">BLOG x EVENTS</h2>
                    <a href="<?php echo get_site_url( 'url' ). '/category/latest/'; ?>" class="link-setup link-setup--orange">See All</a>
                </div>

                <div class="blgcard">
                    <div class="blgcard__div blgcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/blog-img-1.jpg'; ?>" alt="Dennis wins Van Doren Invitational WSBC Champ." class="blgcard-pic__img">
                    </div>
                    <div class="blgcard__div blgcard-info">
                        <p class="blgcard-info__meta">02/08/2017</p>
                        <h2 class="blgcard-info__title">Dennis wins Van Doren Invitational WSBC Champ.</h2>
                        <a href="<?php echo get_site_url( 'url' ). '/2021/07/31/dennis-wins-van-doren-invitational-wsbc-champ/'; ?>" class="link-setup link-setup--orange">Read More</a>
                    </div>
                </div>
                
                <div class="blgcard">
                    <div class="blgcard__div blgcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/blog-img-2.jpg'; ?>" alt="Dennis wins Van Doren Invitational WSBC Champ." class="blgcard-pic__img">
                    </div>
                    <div class="blgcard__div blgcard-info">
                        <p class="blgcard-info__meta">02/08/2017</p>
                        <h2 class="blgcard-info__title">Dennis wins Van Doren Invitational WSBC Champ.</h2>
                        <a href="<?php echo get_site_url( 'url' ). '/2021/07/31/dennis-wins-van-doren-invitational-wsbc-champ-2/'; ?>" class="link-setup link-setup--orange">Read More</a>
                    </div>
                </div>
                
                <div class="blgcard">
                    <div class="blgcard__div blgcard-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/blog-img-3.jpg'; ?>" alt="Dennis wins Van Doren Invitational WSBC Champ." class="blgcard-pic__img">
                    </div>
                    <div class="blgcard__div blgcard-info">
                        <p class="blgcard-info__meta">02/08/2017</p>
                        <h2 class="blgcard-info__title">Dennis wins Van Doren Invitational WSBC Champ.</h2>
                        <a href="<?php echo get_site_url( 'url' ). '/2021/07/31/dennis-wins-van-doren-invitational-wsbc-champ-3/'; ?>" class="link-setup link-setup--orange">Read More</a>
                    </div>
                </div>                

            </div>

            <!-- ADS -->
            <div class="blogsads__div blogsads__div--ads">
                <div class="ads background">
                    <div class="ads__div background ads-info">
                        <div class="ads-info__div">
                            <h2 class="ads-info__title">AGV <br> Best <br> Sellers</h2>
                            <hr class="ads-info__hr">
                            <p class="ads-info__desc">See our most popular products</p>
                            <a href="<?php echo get_site_url(). '/shop'; ?>" class="btn-setup btn-setup--orange ads-info__btn">Shop Now</a>
                        </div>
                    </div>
                    <div class="ads__div ads-pic">
                        <img src="<?php echo get_template_directory_uri(). '/assets/img/AGV-Best-seller.png'; ?>" alt="AGV Best Sellers" class="ads-pic__img">
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- MINI CART MODAL -->
    <div id="miniCart" class="modal fade" role="dialog">
        <div class="modal-dialog ">
      
            <div class="modal-content mcrt">
                <button type="button" class="close mcrt-close" data-dismiss="modal">&times;</button>
                
                <div class="mcrtheader">
                    <h3 class="mcrtheader__title">My Cart</h3>
                </div>


                <div class="mcrtmain">
                    <div class="mcrtitem">
                        <div class="mcrtitem__div mcrtitem-pic">
                            <img src="<?php echo get_template_directory_uri(). '/assets/img/HJC-CL-17-CAPTAIN-AMERICA-(SNELL).png'; ?>" alt="HJC CL-17 CAPTAIN AMERICA (SNELL)" class="mcrtitem-pic__img">
                        </div>
                        <div class="mcrtitem__div mcrtitem-info">
                            <p class="mcrtitem-info__name">HJC CL-17 CAPTAIN AMERICA (SNELL)</p>
                            <p class="mcrtitem-info__qtyprice">Qty: <span class="mcrtitem-info__span">1</span></p>
                            <p class="mcrtitem-info__qtyprice">Price <span class="mcrtitem-info__span">$350.5</span></p>
                        </div>
                    </div>
                  
                </div>


                <div class="mcrttotal">
                    <p class="mcrttotal__p">Subtotal: <span class="mcrttotal__span">$ 350.5</span></p>
                </div>

                <div class="mcrtcheckout">
                    <a href="#" class="btn-setup btn-setup--orange mcrtcheckout__btn">View Cart</a>
                    <button class="btn-setup btn-setup--orange">Checkout</button>
                </div>
            </div>
        
        </div>
    </div>    

</main><!-- #site-content -->

<?php wp_footer(); ?>