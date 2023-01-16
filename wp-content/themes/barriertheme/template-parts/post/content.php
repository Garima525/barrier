<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.2
 */
$post_ID = get_the_id(); 
$category_object = get_the_category($post_ID);
$category_name = $category_object[0]->name;
$author_id = $post->post_author;
$count = $category_object[0]->category_count;

if($category_name == 'Europe'){
	$background = '#ffae25';
}elseif($category_name == 'America'){
	$background = '#ac27c4';
}
elseif($category_name == 'Canada'){
	$background = '#558811';
}
elseif($category_name == 'Travel'){
	$background = '#3dd800';
}
?>


<div id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
  <div class="main-wrap">
    <div class="entry-header">
      <span class="entry-categories">
        <a href="#">
          <span class="category-style" style="background:<?=$background?>"><?=$category_name?></span>
        </a>
      </span>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <ul class="entry-meta">
        <li class="item-author">by <a href="#" title="Posts by admin" rel="author"><?php the_author_meta( 'user_nicename' , $author_id ); ?></a>
        </li>
        <li>
          <i class="far fa-calendar-alt"></i><?php echo get_the_date(); ?>
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
      <img width="1296" height="700" src="<?php echo get_the_post_thumbnail_url($post_ID, 'full'); ?>" />
    </div>
    <div class="entry-content">
    	<?php
      	the_content( sprintf(
			__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),
			get_the_title()
		) );
		?>
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
    <!-- author bio -->
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
    <!-- next/prev post -->
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
</div>



 
 