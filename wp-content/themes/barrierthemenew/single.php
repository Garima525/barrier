<?php
echo get_header();?>
<div id="content" class="site-content">
  <div class="entry-banner">
    <div class="container">
      <div class="entry-banner-content">
        <div class="breadcrumb-area">
          <div class="entry-breadcrumb">
            <?php
            if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '</p><p id=“breadcrumbs”>','</p><p>' );
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div id="primary" class="content-area normal">
    <div id="contentHolder">
      <div class="container">
        <div class="row">
          <div class="col-xl-9">
            <main id="main" class="site-main">
                <div class="rt-sidebar-sapcer ajax-scroll-post">
                <?php
                    /* Start the Loop */
                    while ( have_posts() ) : the_post();

                        get_template_part( 'template-parts/post/content', get_post_format() );

                        // If comments are open or we have at least one comment, load up the comment template.
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;

                        /*the_post_navigation( array(
                            'prev_text' => '<span class="screen-reader-text">' . __( 'Previous Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Previous', 'twentyseventeen' ) . '</span> <span class="nav-title"><span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-left' ) ) . '</span>%title</span>',
                            'next_text' => '<span class="screen-reader-text">' . __( 'Next Post', 'twentyseventeen' ) . '</span><span aria-hidden="true" class="nav-subtitle">' . __( 'Next', 'twentyseventeen' ) . '</span> <span class="nav-title">%title<span class="nav-title-icon-wrapper">' . twentyseventeen_get_svg( array( 'icon' => 'arrow-right' ) ) . '</span></span>',
                        ) );*/

                    endwhile; // End of the loop.
                ?>


              
                <!-- <div id="post-6921" class="default post-6921 post type-post status-publish format-standard has-post-thumbnail hentry category-america tag-music tag-technology tag-travel">
                  <div class="main-wrap">
                    <div class="entry-header">
                      <span class="entry-categories">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/america/">
                          <span class="category-style" style="background:#ac27c4">America</span>
                        </a>
                      </span>
                      <h1 class="entry-title">African Nation Are Strugling To Save Their Wildlife</h1>
                      <ul class="entry-meta">
                        <li class="item-author">by <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                        </li>
                        <li>
                          <i class="far fa-calendar-alt"></i>January 21, 2022
                        </li>
                        <li>
                          <i class="far fa-comments"></i>
                          <span class="comment-number">0</span> Comments
                        </li>
                        <li class="meta-reading-time meta-item">
                          <i class="far fa-clock"></i>
                          <span class="meta-reading-time meta-item">3 minutes read</span>
                        </li>
                        <li>
                          <i class="fas fa-signal"></i>
                          <span class="meta-views meta-item ">
                            <span class="meta-views meta-item high">
                              <span class="view-number">454</span> Views </span>
                          </span>
                        </li>
                        <li>
                          <i class="fas fa-clock"></i>
                          <span class="date meta-item">
                            <span>10 months ago</span>
                          </span>
                        </li>
                      </ul>
                    </div>
                    <div class="share-box-area">
                      <div class="post-share">
                        <div class="share-links ">
                          <a href="https://facebook.com/sharer.php?u=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="facebook-f-share-button large-share-button">
                            <span class="fab fa-facebook-f"></span>
                            <span class="social-text">Facebook</span>
                          </a>
                          <a href="https://twitter.com/intent/tweet?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="twitter-neeon-share-button large-share-button">
                            <span class="fab fa-twitter"></span>
                            <span class="social-text">Twitter</span>
                          </a>
                          <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F&#038;description=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;media=https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-1296x700.jpg" rel="external" target="_blank" class="pinterest-p-share-button">
                            <span class="fab fa-pinterest-p"></span>
                            <span class="screen-reader-text">Pinterest</span>
                          </a>
                          <a href="https://api.whatsapp.com/send?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife%20–%20https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="whatsapp-share-button">
                            <span class="fab fa-whatsapp"></span>
                            <span class="screen-reader-text">Whatsapp</span>
                          </a>
                          <a href="https://cloud.google.com/send?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife%20–%20https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="cloud-share-button">
                            <span class="fas fa-cloud"></span>
                            <span class="screen-reader-text">Cloud</span>
                          </a>
                          <a href="https://dribbble.com?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F&#038;title=African+Nation+Are+Strugling+To+Save+Their+Wildlife" rel="external" target="_blank" class="dribbble-share-button">
                            <span class="fab fa-dribbble"></span>
                            <span class="screen-reader-text">StumbleUpon</span>
                          </a>
                          <a href="#" rel="external" target="_blank" class="print-share-button">
                            <span class="fas fa-print"></span>
                            <span class="screen-reader-text">Print</span>
                          </a>
                          <a href="mailto:?subject=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;body=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="email-share-button">
                            <span class="far fa-envelope"></span>
                            <span class="screen-reader-text">Share via Email</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="entry-thumbnail-area">
                      <img width="1296" height="700" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-1296x700.jpg" class="img-responsive wp-post-image" alt="" decoding="async" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-1296x700.jpg 1296w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-300x162.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-768x414.jpg 768w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-960x520.jpg 960w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-155x83.jpg 155w" sizes="(max-width: 1296px) 100vw, 1296px" />
                    </div>
                    <div class="entry-content">
                      <p>Ahen an unknown printer took a galley of type and their scrambled imaketype specimen book has follorrvived not only fiver centuriewhen an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                      <p>Travel orem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a gallery Followe yof type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronics are o nic typesetting, remaining essentially unchanged.</p>
                      <p>Mravel orem Ipsum has been the industry&#8217;s standard dummy text ever since the 1500s, when an unknown printer took a galleyof typed scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electro nic typesetting, remain ing essentially unchanged.</p>
                      <blockquote class="wp-block-quote">
                        <p>
                          <em>when an unknown printer took a galley of type and scrambled it to make a type area specimen book It has survived not only five centuries.but also the leap introduce electronic typesetting, remaining essentially unchanged.</em>
                        </p>
                        <cite>
                          <strong>Willum Skeener</strong>
                        </cite>
                      </blockquote>
                      <p>Struggling to sell one multi-million dollar home currently on the market won’t stop actress and singer Jennifer Lopez from expanding her propestate holdings an eight-plus acre estate in Bel-Air anchored by a Struggling to sell one multi-million dollar home uiurrently on the market won’t stop actress and singer Jennifer.</p>
                      <h3>Middle Post Heading</h3>
                      <p>Our should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Surround yourself with angels. They never said winning was easy. Some people can’t handle success, I can. Look at the sunset, life is amazing, life is beautiful, life is what A federal government initiated report conducted by the.</p>
                      <div class="is-layout-flex wp-container-3 wp-block-columns">
                        <div class="is-layout-flow wp-block-column">
                          <figure class="wp-block-image size-full">
                            <img decoding="async" loading="lazy" width="696" height="540" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_1.jpg" alt="" class="wp-image-56" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_1.jpg 696w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_1-155x120.jpg 155w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_1-300x233.jpg 300w" sizes="(max-width: 696px) 100vw, 696px" />
                          </figure>
                        </div>
                        <div class="is-layout-flow wp-block-column">
                          <p>Prom should never complain, complaining is a weak emoti you got life, we breathing, we blessed. Surround yourself with an gels. They never said winning.</p>
                          <ul class="single-post-list">
                            <li>Pasting their cartoon to form over bags</li>
                            <li>Certified emergency medical technician was</li>
                            <li>Galaxy’s Edge the best thing about</li>
                            <li>Phone owner uses</li>
                          </ul>
                          <p>Prom should never complain, complaining is a weak emoti you got life, we breathing, we blessed. Surround yourself with an gels. They never said winning Prom should never complain.</p>
                        </div>
                      </div>
                      <p>Our should never complain, complaining is a weak emotion, you got life, we breathing, we blessed. Surround yourself with angels. They never said winning was easy. Some people can’t handle success, I can. Look at the sunset, life is amazing, life is beautiful, life is what A federal government initiated report conducted by the.</p>
                      <h3>Success is how high you bounce when you hit bottom</h3>
                      <p>Our should never complain, complaining is a weak emotion, you gotlife, we breathing, we blessed. Surround yourself with angels. They never said winning was easy. Some people can’t handle success I can. Look at the sunset.Nmply dummy text of the printing and typ esetting industry. Lorem Ipsum has been the industry’s st andard dummy text ever since the 1500s, when an unknown printer took a galley of type andse aerr crambled it to make a type specimen book.</p>
                      <div class="is-layout-flex wp-container-6 wp-block-columns">
                        <div class="is-layout-flow wp-block-column">
                          <figure class="wp-block-image size-full">
                            <img decoding="async" loading="lazy" width="696" height="540" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_2.jpg" alt="" class="wp-image-60" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_2.jpg 696w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_2-155x120.jpg 155w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_2-300x233.jpg 300w" sizes="(max-width: 696px) 100vw, 696px" />
                          </figure>
                        </div>
                        <div class="is-layout-flow wp-block-column">
                          <figure class="wp-block-image size-full">
                            <img decoding="async" loading="lazy" width="696" height="540" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_3.jpg" alt="" class="wp-image-59" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_3.jpg 696w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_3-155x120.jpg 155w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/10/single-post-img_3-300x233.jpg 300w" sizes="(max-width: 696px) 100vw, 696px" />
                          </figure>
                        </div>
                      </div>
                      <p>Our should never complain, complaining is a weak emotion, you gotlife, we breathing, we blessed. Surround yourself with angels. They never said winning was easy. Some people can’t handle success I can. Look at the sunset.Nmply dummy text of the printing and typ esetting industry. Lorem Ipsum has been the industry’s st andard dummy.</p>
                      <ul class="single-post-list">
                        <li>Crisp fresh iconic elegant timeless clean perfume</li>
                        <li>Neck straight sharp silhouette and dart detail</li>
                        <li>Machine wash cold slim fit premium stretch selvedge denim comfortable low waist</li>
                      </ul>
                      <p>Our should never complain, complaining is a weak emotion, you gotlife, we breathing, we blessed. Surround yourself with angels. They never said winning was easy. Some people can’t handle success I can. Look at the sunset.Nmply dummy text of the printing and typ esetting industry. Lorem Ipsum has been the industry’s st andard dummy.</p>
                      <figure class="wp-block-image size-full">
                        <img decoding="async" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/11/ad-banner_4.jpg" alt="" class="wp-image-62" />
                      </figure>
                    </div>
                    <div class="entry-footer">
                      <div class="entry-footer-meta">
                        <div class="meta-tags">
                          <h4 class="meta-title">Tags:</h4>
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/music/" rel="tag">Music</a>
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/technology/" rel="tag">Technology</a>
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/travel/" rel="tag">Travel</a>
                        </div>
                        <div class="post-share">
                          <h4 class="meta-title">Share This Post:</h4>
                          <div class="share-links ">
                            <a href="https://facebook.com/sharer.php?u=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="facebook-f-share-button large-share-button">
                              <span class="fab fa-facebook-f"></span>
                              <span class="social-text">Facebook</span>
                            </a>
                            <a href="https://twitter.com/intent/tweet?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="twitter-neeon-share-button large-share-button">
                              <span class="fab fa-twitter"></span>
                              <span class="social-text">Twitter</span>
                            </a>
                            <a href="http://pinterest.com/pin/create/button/?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F&#038;description=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;media=https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/travel_7-1296x700.jpg" rel="external" target="_blank" class="pinterest-p-share-button">
                              <span class="fab fa-pinterest-p"></span>
                              <span class="screen-reader-text">Pinterest</span>
                            </a>
                            <a href="https://api.whatsapp.com/send?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife%20–%20https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="whatsapp-share-button">
                              <span class="fab fa-whatsapp"></span>
                              <span class="screen-reader-text">Whatsapp</span>
                            </a>
                            <a href="https://cloud.google.com/send?text=African+Nation+Are+Strugling+To+Save+Their+Wildlife%20–%20https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="cloud-share-button">
                              <span class="fas fa-cloud"></span>
                              <span class="screen-reader-text">Cloud</span>
                            </a>
                            <a href="https://dribbble.com?url=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F&#038;title=African+Nation+Are+Strugling+To+Save+Their+Wildlife" rel="external" target="_blank" class="dribbble-share-button">
                              <span class="fab fa-dribbble"></span>
                              <span class="screen-reader-text">StumbleUpon</span>
                            </a>
                            <a href="#" rel="external" target="_blank" class="print-share-button">
                              <span class="fas fa-print"></span>
                              <span class="screen-reader-text">Print</span>
                            </a>
                            <a href="mailto:?subject=African+Nation+Are+Strugling+To+Save+Their+Wildlife&#038;body=https%3A%2F%2Fradiustheme.com%2Fdemo%2Fwordpress%2Fthemes%2Fneeon%2Fafrican-nation-are-strugling-to-save-their-wildlife-2%2F" rel="external" target="_blank" class="email-share-button">
                              <span class="far fa-envelope"></span>
                              <span class="screen-reader-text">Share via Email</span>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                    <div class="media about-author">
                      <div class="pull-left">
                        <img alt='' src='https://secure.gravatar.com/avatar/dfbbc19663285273a2f7081a843a22a3?s=150&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/dfbbc19663285273a2f7081a843a22a3?s=300&#038;d=mm&#038;r=g 2x' class='avatar avatar-150 photo' height='150' width='150' loading='lazy' decoding='async' />
                      </div>
                      <div class="media-body">
                        <div class="about-author-info">
                          <h3 class="author-title">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/author/admin/" title="Posts by admin" rel="author">admin</a>
                          </h3>
                          <div class="author-designation">Senior Author</div>
                        </div>
                        <div class="author-bio">The leap into electronic typesetting, remaining essentiallyuncha opularisedthe with the release of Letrasetsheets containingthe leap electrtypesetting remaining essentially unchanged.</div>
                        <ul class="author-box-social">
                          <li>
                            <a href="#">
                              <i class="fab fa-facebook-f"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fab fa-twitter"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fab fa-linkedin-in"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fab fa-pinterest-p"></i>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <i class="fab fa-instagram"></i>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                    
                    <div class="divider post-navigation">
                      <div class=" text-left">
                        <div class="pad-lr-15">
                          <span class="next-article">
                            <i class="flaticon flaticon-previous"></i>
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-2/" rel="next">Previous Post</a>
                          </span>
                          <h4 class="post-nav-title">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/how-to-have-fantas-tic-trip-without-blowing-your-budget-2/" rel="next">How to have fantas tic trip without blowing your budget</a>
                          </h4>
                        </div>
                      </div>
                      <div class="navigation-archive">
                        <a href="https://radiustheme.com/demo/wordpress/themes/neeon/blog/">
                          <i class="flaticon flaticon-menu"></i>
                        </a>
                      </div>
                      <div class=" text-right">
                        <div class="pad-lr-15">
                          <span class="prev-article">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-ancellation-of-australian/" rel="prev">Next Post</a>
                            <i class="flaticon flaticon-next"></i>
                          </span>
                          <h4 class="post-nav-title">
                            <a href="https://radiustheme.com/demo/wordpress/themes/neeon/novak-appeals-in-court-against-dearless-care-ancellation-of-australian/" rel="prev">Novak appeals in court against dearless Care ancellation of Australian</a>
                          </h4>
                        </div>
                      </div>
                    </div>
                    <div class="rt-related-post">
                      <div class="rt-swiper-slider related-post" data-xld='{&quot;slidesPerView&quot;:2,&quot;centeredSlides&quot;:false,&quot;loop&quot;:true,&quot;spaceBetween&quot;:20,&quot;slideToClickedSlide&quot;:true,&quot;slidesPerGroup&quot;:1,&quot;autoplay&quot;:{&quot;delay&quot;:1},&quot;speed&quot;:500,&quot;breakpoints&quot;:{&quot;0&quot;:{&quot;slidesPerView&quot;:1},&quot;576&quot;:{&quot;slidesPerView&quot;:2},&quot;768&quot;:{&quot;slidesPerView&quot;:2},&quot;992&quot;:{&quot;slidesPerView&quot;:2},&quot;1200&quot;:{&quot;slidesPerView&quot;:2},&quot;1600&quot;:{&quot;slidesPerView&quot;:3}},&quot;auto&quot;:false}'>
                        <div class="section-title">
                          <h3 class="related-title">Related Post <span class="titledot"></span>
                            <span class="titleline"></span>
                          </h3>
                          <div class="swiper-button">
                            <div class="swiper-button-prev">
                              <i class="fas fa-chevron-left"></i>
                            </div>
                            <div class="swiper-button-next">
                              <i class="fas fa-chevron-right"></i>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-wrapper">
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-6/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_01-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/science-fiction/" rel="category tag">Science Fiction</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-6/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-5/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_03-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/horror/" rel="category tag">Horror</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-5/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-4/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_02-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/thriller/" rel="category tag">Thriller</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-4/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-3/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_06-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/science-fiction/" rel="category tag">Science Fiction</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-3/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-2/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_04-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/horror/" rel="category tag">Horror</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text-2/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                          <div class="blog-box swiper-slide">
                            <div class="blog-img-holder">
                              <div class="blog-img">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text/" class="img-opacity-hover">
                                  <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/11/movie_05-551x431.jpg" class="img-responsive wp-post-image" alt="" decoding="async" loading="lazy" />
                                </a>
                              </div>
                            </div>
                            <div class="entry-content">
                              <span class="entry-categories">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/movie/thriller/" rel="category tag">Thriller</a>
                              </span>
                              <h4 class="entry-title title-animation-black-normal">
                                <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-what-in-battlefield-deluxe-hotel-area-edition-nmply-dummy-text/">Here What In Battlefield Deluxe Hotel Area Edition Nmply</a>
                              </h4>
                              <div class="entry-date">
                                <i class="far fa-calendar-alt"></i>November 30, 2022
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </main>
          </div>
          <div class="col-xl-3 col-lg-8 mx-auto fixed-bar-coloum">
            <aside class="sidebar-widget-area normal">
              <div id="search-2" class="widget widget_search">
                <form role="search" method="get" class="search-form" action="https://radiustheme.com/demo/wordpress/themes/neeon/">
                  <div class="custom-search-input">
                    <div class="input-group">
                      <input type="text" class="search-query form-control" placeholder="Search Here  ..." value="" name="s" />
                      <button class="btn" type="submit">
                        <svg width="20" height="20" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M17.1249 16.2411L12.4049 11.5211C13.5391 10.1595 14.1047 8.41291 13.9841 6.64483C13.8634 4.87675 13.0657 3.22326 11.7569 2.02834C10.4482 0.833415 8.7291 0.189061 6.95736 0.229318C5.18562 0.269575 3.49761 0.991344 2.24448 2.24448C0.991344 3.49761 0.269575 5.18562 0.229318 6.95736C0.189061 8.7291 0.833415 10.4482 2.02834 11.7569C3.22326 13.0657 4.87675 13.8634 6.64483 13.9841C8.41291 14.1047 10.1595 13.5391 11.5211 12.4049L16.2411 17.1249L17.1249 16.2411ZM1.49989 7.12489C1.49989 6.01237 1.82979 4.92483 2.44787 3.99981C3.06596 3.07478 3.94446 2.35381 4.97229 1.92807C6.00013 1.50232 7.13113 1.39093 8.22227 1.60797C9.31342 1.82501 10.3157 2.36074 11.1024 3.14741C11.889 3.93408 12.4248 4.93636 12.6418 6.02751C12.8588 7.11865 12.7475 8.24965 12.3217 9.27748C11.896 10.3053 11.175 11.1838 10.25 11.8019C9.32495 12.42 8.23741 12.7499 7.12489 12.7499C5.63355 12.7482 4.20377 12.1551 3.14924 11.1005C2.09471 10.046 1.50154 8.61622 1.49989 7.12489Z" fill="currentColor" />
                        </svg>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
              <div id="apsc_widget-2" class="widget widget_apsc_widget">
                <div class="rt-widget-title-holder">
                  <h3 class="widgettitle">STAY CONNECTED <span class="titledot"></span>
                    <span class="titleline"></span>
                  </h3>
                </div>
                <div class="apsc-icons-wrapper clearfix apsc-theme-4 ">
                  <div class="apsc-each-profile">
                    <a class="apsc-facebook-icon clearfix" href="https://facebook.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="fab fa-facebook-f apsc-facebook"></i>
                          <span class="media-name">Facebook</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Fans</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-twitter-icon clearfix" href="https://twitter.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="fab fa-twitter apsc-twitter"></i>
                          <span class="media-name">Twitter</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-instagram-icon clearfix" href="https://instagram.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-instagram fab fa-instagram"></i>
                          <span class="media-name">Instagram</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-youtube-icon clearfix" href="" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-youtube fab fa-youtube"></i>
                          <span class="media-name">Youtube</span>
                        </span>
                        <span class="apsc-count">0</span>
                        <span class="apsc-media-type">Subscriber</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-soundcloud-icon clearfix" href="https://soundcloud.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-soundcloud fab fa-soundcloud"></i>
                          <span class="media-name">Soundcloud</span>
                        </span>
                        <span class="apsc-count"></span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                  <div class="apsc-each-profile">
                    <a class="apsc-dribble-icon clearfix" href="https://dribbble.com/" target="_blank">
                      <div class="apsc-inner-block">
                        <span class="social-icon">
                          <i class="apsc-dribbble fab fa-dribbble"></i>
                          <span class="media-name">dribble</span>
                        </span>
                        <span class="apsc-count"></span>
                        <span class="apsc-media-type">Followers</span>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div id="rt-post-box-5" class="widget rt-post-box">
                <div class="rt-widget-title-holder">
                  <h3 class="widgettitle">POPULAR NEWS <span class="titledot"></span>
                    <span class="titleline"></span>
                  </h3>
                </div>
                <div class="post-box-style number-counter g-3 ">
                  <div class="rt-news-box-widget box-style-1">
                    <div class="item-list">
                      <div class="post-box-img">
                        <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/budget-issues-force-the-our-to-be-cancelled/" title="Budget Issues Force The Our To Be Cancelled">
                          <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_65-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_65-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_65-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </a>
                      </div>
                      <div class="post-content">
                        <div class="entry-cat">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/fashion/">Fashion</a>
                        </div>
                        <h4 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/budget-issues-force-the-our-to-be-cancelled/">Budget Issues Force The Our To Be Cancelled</a>
                        </h4>
                        <div class="entry-date">
                          <i class="far fa-calendar-alt icon"></i>December 9, 2021
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rt-news-box-widget box-style-1">
                    <div class="item-list">
                      <div class="post-box-img">
                        <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/here-whats-in-battlefield-80-deluxe-edition-nmply-dummy-text-2/" title="Here What’s In Battlefield $80 Deluxe Edition Nmply dummy text">
                          <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_60-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_60-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_60-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </a>
                      </div>
                      <div class="post-content">
                        <div class="entry-cat">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/fashion/">Fashion</a>
                        </div>
                        <h4 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/here-whats-in-battlefield-80-deluxe-edition-nmply-dummy-text-2/">Here What’s In Battlefield $80 Deluxe Edition Nmply dummy text</a>
                        </h4>
                        <div class="entry-date">
                          <i class="far fa-calendar-alt icon"></i>December 9, 2021
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="rt-news-box-widget box-style-1">
                    <div class="item-list">
                      <div class="post-box-img">
                        <a class="post-img" href="https://radiustheme.com/demo/wordpress/themes/neeon/model-slams-brands-using-fur-in-fashion-after-walking-off-photoshoot/" title="Model slams brands using fur in fashion after walking off photoshoot">
                          <img width="200" height="200" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_15-200x200.jpg" class="media-object wp-post-image" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_15-200x200.jpg 200w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/blog_15-150x150.jpg 150w" sizes="(max-width: 200px) 100vw, 200px" />
                        </a>
                      </div>
                      <div class="post-content">
                        <div class="entry-cat">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/fashion/">Fashion</a>
                        </div>
                        <h4 class="entry-title title-animation-black-normal">
                          <a href="https://radiustheme.com/demo/wordpress/themes/neeon/model-slams-brands-using-fur-in-fashion-after-walking-off-photoshoot/">Model slams brands using fur in fashion after walking off photoshoot</a>
                        </h4>
                        <div class="entry-date">
                          <i class="far fa-calendar-alt icon"></i>December 9, 2021
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div id="neeon_about_author-2" class="widget widget_neeon_about_author">
                <div class="rt-widget-title-holder">
                  <h3 class="widgettitle">About Author <span class="titledot"></span>
                    <span class="titleline"></span>
                  </h3>
                </div>
                <div class="author-widget" style="background-image: url(https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/post-banner_1.jpg)">
                  <span>
                    <img width="150" height="47" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/01/logo-light.svg" class="attachment-thumbnail size-thumbnail" alt="" />
                  </span>
                  <h3>The Most Powerful </a>
                  </h3>
                  <h4>News, Blog &amp; Magazine WordPress Theme</h4>
                  <a class="about-btn button-style-2" href="#">SHOP NOW</a>
                </div>
              </div>
              <div id="rt-categories-2" class="widget rt-category">
                <div class="rt-widget-title-holder">
                  <h3 class="widgettitle">HOT CATEGORIES <span class="titledot"></span>
                    <span class="titleline"></span>
                  </h3>
                </div>
                <div class="rt-category rt-category-style2">
                  <div class="rt-item space">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/obituaries/accident/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/08/obituaries_05-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" />
                      <div class="rt-content">
                        <h4 class="rt-cat-name"> Accident </h4>
                        <p class="rt-cat-count">1</p>
                      </div>
                    </a>
                  </div>
                  <div class="rt-item space">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/action/">
                      <img width="310" height="170" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/action.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/action.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/action-300x165.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/action-155x85.jpg 155w" sizes="(max-width: 310px) 100vw, 310px" />
                      <div class="rt-content">
                        <h4 class="rt-cat-name"> Action </h4>
                        <p class="rt-cat-count">9</p>
                      </div>
                    </a>
                  </div>
                  <div class="rt-item space">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/adventure/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/03/photography_05-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" />
                      <div class="rt-content">
                        <h4 class="rt-cat-name"> Adventure </h4>
                        <p class="rt-cat-count">3</p>
                      </div>
                    </a>
                  </div>
                  <div class="rt-item space">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/travel/america/">
                      <img width="310" height="170" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/travel.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" srcset="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/travel.jpg 310w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/travel-300x165.jpg 300w, https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2021/12/travel-155x85.jpg 155w" sizes="(max-width: 310px) 100vw, 310px" />
                      <div class="rt-content">
                        <h4 class="rt-cat-name"> America </h4>
                        <p class="rt-cat-count">4</p>
                      </div>
                    </a>
                  </div>
                  <div class="rt-item space">
                    <a href="https://radiustheme.com/demo/wordpress/themes/neeon/category/animal/">
                      <img width="551" height="431" src="https://radiustheme.com/demo/wordpress/themes/neeon/wp-content/uploads/2022/03/animal_01-551x431.jpg" class="attachment-neeon-size3 size-neeon-size3" alt="" decoding="async" loading="lazy" />
                      <div class="rt-content">
                        <h4 class="rt-cat-name"> Animal </h4>
                        <p class="rt-cat-count">7</p>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
              <div id="fluentform_widget-2" class="widget widget_fluentform_widget">
                <div class='fluentform fluentform_wrapper_2'>
                  <form data-form_id="2" id="fluentform_2" class="frm-fluent-form fluent_form_2 ff-el-form-top ff_form_instance_2_1 ff-form-loading" data-form_instance="ff_form_instance_2_1" method="POST">
                    <input type='hidden' name='__fluent_form_embded_post_id' value='6921' />
                    <input type="hidden" id="_fluentform_2_fluentformnonce" name="_fluentform_2_fluentformnonce" value="08b4a0376f" />
                    <input type="hidden" name="_wp_http_referer" value="/demo/wordpress/themes/neeon/african-nation-are-strugling-to-save-their-wildlife-2/" />
                    <div class='ff-el-group  ff-custom_html subscribe-form' data-name="custom_html-2_1">
                      <h4>Subscribe To Our <br />Newsletter </h4>
                      <p>No spam, notifications only about new products, updates.</p>
                    </div>
                    <div data-name="ff_cn_id_1" class='ff-t-container ff-column-container ff_columns_total_2 subscribe-form '>
                      <div class='ff-t-cell ff-t-column-1' style='flex-basis: 50%;'>
                        <div class='ff-el-group'>
                          <div class='ff-el-input--content'>
                            <input type="email" name="email_1" id="ff_2_email_1" class="ff-el-form-control" placeholder="Your Email*" data-name="email_1">
                          </div>
                        </div>
                      </div>
                      <div class='ff-t-cell ff-t-column-2' style='flex-basis: 50%;'>
                        <div class='ff-el-group ff-text-left ff_submit_btn_wrapper ff_submit_btn_wrapper_custom'>
                          <button class="ff-btn ff-btn-submit ff-btn-md ff_btn_style wpf_has_custom_css" type="submit">Subscribe Now</button>
                          <style>
                            form.fluent_form_2 .wpf_has_custom_css.ff-btn-submit {
                              min-width: 100%;
                            }

                            form.fluent_form_2 .wpf_has_custom_css.ff-btn-submit:hover {
                              min-width: 100%;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </form>
                  <div id='fluentform_2_errors' class='ff-errors-in-stack ff_form_instance_2_1 ff-form-loading_errors ff_form_instance_2_1_errors'></div>
                </div>
                <script type="text/javascript">
                  window.fluent_form_ff_form_instance_2_1 = {
                    "id": "2",
                    "settings": {
                      "layout": {
                        "labelPlacement": "top",
                        "helpMessagePlacement": "with_label",
                        "errorMessagePlacement": "inline",
                        "asteriskPlacement": "asterisk-right"
                      },
                      "restrictions": {
                        "denyEmptySubmission": {
                          "enabled": false
                        }
                      }
                    },
                    "form_instance": "ff_form_instance_2_1",
                    "form_id_selector": "fluentform_2",
                    "rules": {
                      "email_1": {
                        "required": {
                          "value": true,
                          "message": "This field is required"
                        },
                        "email": {
                          "value": true,
                          "message": "This field must contain a valid email"
                        }
                      }
                    }
                  };
                </script>
              </div>
              <div id="tag_cloud-2" class="widget widget_tag_cloud">
                <div class="rt-widget-title-holder">
                  <h3 class="widgettitle">TAGS <span class="titledot"></span>
                    <span class="titleline"></span>
                  </h3>
                </div>
                <div class="tagcloud">
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/animal/" class="tag-cloud-link tag-link-15 tag-link-position-1" style="font-size: 16.881720430108pt;" aria-label="Animal (29 items)">Animal</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/apple/" class="tag-cloud-link tag-link-48 tag-link-position-2" style="font-size: 8pt;" aria-label="apple (1 item)">apple</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/fashion/" class="tag-cloud-link tag-link-8 tag-link-position-3" style="font-size: 17.784946236559pt;" aria-label="Fashion (39 items)">Fashion</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/food/" class="tag-cloud-link tag-link-9 tag-link-position-4" style="font-size: 18.462365591398pt;" aria-label="Food (48 items)">Food</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/health/" class="tag-cloud-link tag-link-10 tag-link-position-5" style="font-size: 18.462365591398pt;" aria-label="Health (48 items)">Health</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/music/" class="tag-cloud-link tag-link-16 tag-link-position-6" style="font-size: 22pt;" aria-label="Music (144 items)">Music</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/politics/" class="tag-cloud-link tag-link-14 tag-link-position-7" style="font-size: 17.10752688172pt;" aria-label="Politics (31 items)">Politics</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/race/" class="tag-cloud-link tag-link-49 tag-link-position-8" style="font-size: 8pt;" aria-label="Race (1 item)">Race</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/sports/" class="tag-cloud-link tag-link-13 tag-link-position-9" style="font-size: 16.881720430108pt;" aria-label="Sports (29 items)">Sports</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/tech/" class="tag-cloud-link tag-link-50 tag-link-position-10" style="font-size: 18.688172043011pt;" aria-label="Tech (51 items)">Tech</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/technology/" class="tag-cloud-link tag-link-11 tag-link-position-11" style="font-size: 22pt;" aria-label="Technology (142 items)">Technology</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/travel/" class="tag-cloud-link tag-link-12 tag-link-position-12" style="font-size: 21.623655913978pt;" aria-label="Travel (128 items)">Travel</a>
                  <a href="https://radiustheme.com/demo/wordpress/themes/neeon/tag/western-foods/" class="tag-cloud-link tag-link-51 tag-link-position-13" style="font-size: 8pt;" aria-label="Western Foods (1 item)">Western Foods</a>
                </div>
              </div>
            </aside>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!--#content-->
<!-- progress-wrap -->
<div class="scroll-wrap">
  <svg class="scroll-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
    <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
  </svg>
</div>
<?php
echo get_footer();
?>