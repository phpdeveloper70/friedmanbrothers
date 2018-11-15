<style type="text/css">.header-container{border-bottom:1px solid #e1e1e1;}</style>
<div class="row" style="margin:0 -10px;">
    <div class="col-md-3" style="padding:0 10px;">
        <div class="home-side-menu" style="margin-bottom:20px;">
            <h2 class="side-menu-title">CATEGORIES</h2>
            {{block type="core/template" template="smartwave/megamenu/html/sidemenu.phtml"}}
            {{block type="core/template" template="smartwave/megamenu/html/sidemobilemenu.phtml"}}
        </div>
    </div>
    <div class="col-md-9" style="padding:0 10px;">
        <div class="col-md-7" >
        <div class="owl-bottom-narrow owl-banner-carousel" style="margin-bottom:20px;">
            <div id="banner-slider-demo-6" class="owl-carousel owl-theme">
                <div class="item" style="background:#f0f0f0;background-image:linear-gradient(#e8e8e8,#f0f0f0);position:relative;border-radius:5px;">
                    <img src="{{media url="wysiwyg/porto/homepage/slider/05/01.png"}}" alt="" />
                    <div class="content type1" style="position:absolute;top:30%;left:10%;text-align:right">
                        <h2 style="font-weight:600;line-height:1;color:#08c">HUGE <b style="font-weight:800">SALE</b></h2>
                        <p style="color:#777;font-weight:300;line-height:1;margin-bottom:15px">Now starting at <span style="color:#535353;font-weight:400">$99</span></p>
                        <a href="#" style="font-weight:300;">Shop now &gt;</a>
                    </div>
                </div>
                <div class="item" style="background:#f0f0f0;background-image:linear-gradient(#e8e8e8,#f0f0f0);position:relative;border-radius:5px;">
                    <img src="{{media url="wysiwyg/porto/homepage/slider/05/02.png"}}" alt="" />
                    <div class="content type2" style="position:absolute;top:16.6%;right:25%;text-align:center">
                        <h2 style="font-weight:700;line-height:1;color:#004f7f;border-color:#08c">SPECIAL</h2>
                        <h3 style="color:#08c;font-weight:700;line-height:1;margin-bottom:15px">OFFER</h3>
                        <p style="color:#004f7f;font-weight:400;line-height:1.4;margin-bottom:20px">Buy new digital cameras & <br/>get lenses or accessories</p>
                        <a href="#" class="btn btn-default">Shop now!</a>
                    </div>
                </div>
            </div>
            <script type="text/javascript">
            jQuery(function($){
                $("#banner-slider-demo-6").owlCarousel({autoPlay:true,lazyLoad: true,stopOnHover: true,pagination: true, autoPlay: true,navigation: false,slideSpeed : 500,paginationSpeed : 500,singleItem:true});
            });
            </script>
        </div>
      </div>
      <div class="col-md-5" >
asdfasdas
      </div>
    </div>
</div>
<div class="row" style="margin:0 -10px;">
    <div class="col-md-3" style="padding:0 10px;">
        <div id="image-slider-demo-6" class="owl-carousel owl-theme" style="text-align:center;">
            <div class="item"><img src="{{media url="wysiwyg/porto/homepage/content/01/ad2.png"}}" alt="" /></div>
            <div class="item"><img src="{{media url="wysiwyg/porto/homepage/content/01/ad1.png"}}" alt="" /></div>
            <div class="item"><img src="{{media url="wysiwyg/porto/homepage/content/01/ad2.png"}}" alt="" /></div>
        </div>
        <script type="text/javascript">
        jQuery(function($){
            $("#image-slider-demo-6").owlCarousel({
                lazyLoad: true,
                navigation : false,
                slideSpeed : 300,
                paginationSpeed : 400,
                singleItem:true
            });
        });
        </script>
        <div class="block block-subscribe home-sidebar-block" style="margin-top:40px;margin-bottom:30px;">
            <div class="block-title">
                <strong><span>Be the First to Know</span></strong>
            </div>
            <div class="block-content">
                <p>Keep up on our always evolving product features and technology.<br/>Enter your e-mail and subscribe to our newsletter.</p>
                {{block type="newsletter/subscribe" template="newsletter/home_side_subscribe.phtml"}}
            </div>
        </div>
        <h2 class="filter-title" style="background-image:none;margin-bottom:5px;"><span class="content"><strong>Testimonials</strong></span></h2>
        <div id="testimonials-slider-demo-6" class="owl-carousel owl-theme">
            <div class="item">
                <blockquote class="testimonial">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author">
                    <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="{{media url="wysiwyg/porto/homepage/content/07/client-1-11.jpg"}}" alt=""/></div>
                    <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
                </div>
            </div>
            <div class="item">
                <blockquote class="testimonial">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec hendrerit vehicula est.</p>
                </blockquote>
                <div class="testimonial-arrow-down"></div>
                <div class="testimonial-author">
                    <div class="img-thumbnail img-thumbnail-small"><img width="60" height="60" src="{{media url="wysiwyg/porto/homepage/content/07/client-1-11.jpg"}}" alt=""/></div>
                    <p><strong>John Smith</strong><span>CEO &amp; Founder - Okler</span></p>
                </div>
            </div>
        </div>
        <script type="text/javascript">
        jQuery(function($){
            $("#testimonials-slider-demo-6").owlCarousel({
                lazyLoad: true,
                responsiveRefreshRate: 50,
                slideSpeed: 200,
                paginationSpeed: 500,
                scrollPerPage: true,
                stopOnHover: true,
                rewindNav: true,
                rewindSpeed: 600,
                pagination: true,
                navigation: false,
                autoPlay: true,
                singleItem: true
            });
        });
        </script>
        <h2 class="filter-title" style="background-image:none;margin-bottom:-15px;margin-top:20px;"><span class="content"><strong>From the Blog</strong></span></h2>
        <div id="latest_news" style="margin:0 -10px;">
            <div class="recent-posts">
                <div class="owl-carousel owl-theme">
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="post-image">
                                    <img src="{{media url="wysiwyg/smartwave/blog/03.jpg"}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="post-date">
                                    <span class="day">08</span>
                                    <span class="month">Dec</span>
                                </div>
                                <div class="postTitle">
                                    <h2><a href="#">Post Format – Video</a></h2>
                                </div>
                                <div class="postContent"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras non placerat mi…</p></div>
                                <a class="readmore" href="#">Read more &gt;</a>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="row">
                            <div class="col-sm-5">
                                <div class="post-image">
                                <img src="{{media url="wysiwyg/smartwave/blog/04.jpg"}}" alt="">
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="post-date">
                                    <span class="day">07</span>
                                    <span class="month">Dec</span>
                                </div>
                                <div class="postTitle">
                                    <h2><a href="#">Post Format – Image Gallery</a></h2>
                                </div>
                                <div class="postContent"><p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent…</p></div>
                                <a class="readmore" href="#">Read more &gt;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <style type="text/css">.recent-posts .item .col-sm-5, .recent-posts .item .col-sm-7{width:100%;}</style>
        <script type="text/javascript">
        jQuery(function($){
            $("#latest_news .owl-carousel").owlCarousel({
                lazyLoad: true,
                responsiveRefreshRate: 50,
                slideSpeed: 200,
                paginationSpeed: 500,
                scrollPerPage: true,
                stopOnHover: true,
                rewindNav: true,
                rewindSpeed: 600,
                pagination: true,
                navigation: false,
                autoPlay: true,
                singleItem: true
            });
        });
        </script>
    </div>
    <div class="col-md-9" style="padding:0 10px;">
        <div class="single-images">
            <div class="row" style="margin-left:-10px;margin-right:-10px;">
                <div class="col-sm-4" style="padding-left:10px;padding-right:10px;">
                    <a class="image-link border-radius" href="#"><img src="{{media url="wysiwyg/porto/homepage/content/06/img1.jpg"}}" alt="" style="width:100%;" /></a>
                </div>
                <div class="col-sm-4" style="padding-left:10px;padding-right:10px;">
                    <a class="image-link border-radius" href="#"><img src="{{media url="wysiwyg/porto/homepage/content/06/img2.jpg"}}" alt="" style="width:100%;" /></a>
                </div>
                <div class="col-sm-4" style="padding-left:10px;padding-right:10px;">
                    <a class="image-link border-radius" href="#"><img src="{{media url="wysiwyg/porto/homepage/content/06/img3.jpg"}}" alt="" style="width:100%;" /></a>
                </div>
            </div>
        </div>
        <h2 class="filter-title" style="margin-top: 20px;"><span class="content"><strong>Featured Fashion Dress</strong></span></h2>
        <div id="featured_fashion_product" class="owl-top-narrow">
            {{block type="filterproducts/featured_home_list" name="featured_list" product_count="8" template="filterproducts/list.phtml"}}
        </div>
        <script type="text/javascript">
            jQuery(function($){
                $("#featured_fashion_product .filter-products .owl-carousel").owlCarousel({lazyLoad: true,    itemsCustom: [ [0, 1], [320, 1], [480, 2], [768, 3], [992, 3], [1200, 4] ],    responsiveRefreshRate: 50,    slideSpeed: 200,    paginationSpeed: 500,    scrollPerPage: false,    stopOnHover: true,    rewindNav: true,    rewindSpeed: 600,    pagination: false,    navigation: true,    autoPlay: true,    navigationText:["<i class='icon-left-open'></i>","<i class='icon-right-open'></i>"]});
            });
        </script>
        <hr style="background-image: linear-gradient(to right, transparent, rgba(0, 0, 0, 0.2), transparent);border: 0;height: 1px;margin: 10px 0 0;"/>
        <div class="row">
            <div class="col-sm-4">
                <h2 class="filter-title" style="background-image:none;margin-top:20px;margin-bottom:5px;"><span class="content"><strong>New</strong></span></h2>
                {{block type="filterproducts/newproduct_home_list" name="newproduct_list" product_count="3" template="filterproducts/small_list.phtml"}}
            </div>
            <div class="col-sm-4">
                <h2 class="filter-title" style="background-image:none;margin-top:20px;margin-bottom:5px;"><span class="content"><strong>Hot</strong></span></h2>
                {{block type="filterproducts/bestsellers_home_list" name="bestsellers_list" product_count="3" template="filterproducts/small_list.phtml"}}
            </div>
            <div class="col-sm-4">
                <h2 class="filter-title" style="background-image:none;margin-top:20px;margin-bottom:5px;"><span class="content"><strong>Sale</strong></span></h2>
                {{block type="filterproducts/sale_home_list" name="sale_list" product_count="3" template="filterproducts/small_list.phtml"}}
            </div>
        </div>
        <div class="shop-features">
            <h2 class="shop-features-title"><span>WHY SHOP WITH US?</span></h2>
            <div class="row">
                <div class="col-sm-4">
                    <i class="icon-star"></i>
                    <h3>DEDICATED SERVICE</h3>
                    <p>Consult our specialists for help with an order, customization, or design advice.</p>
                    <a href="#">Get in Touch &gt;</a>
                </div>
                <div class="col-sm-4">
                    <i class="icon-reply"></i>
                    <h3>FREE RETURNS</h3>
                    <p>We stand behind our goods and services and want you to be satisfied with them.</p>
                    <a href="#">Returns Policy &gt;</a>
                </div>
                <div class="col-sm-4">
                    <i class="icon-paper-plane"></i>
                    <h3>INTERNATIONAL SHIPPING</h3>
                    <p>Currently over 50 countries qualify for express international shipping.</p>
                    <a href="#">Learn More &gt;</a>
                </div>
            </div>
        </div>
    </div>
</div>
