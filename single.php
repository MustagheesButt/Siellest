<?php
get_header();
?>
<link rel="stylesheet" href="wp-content/themes/Siellest/assets/css/cmsMain.css" />
<link rel="stylesheet" href="wp-content/themes/Siellest/assets/css/born-siellest-app.css" />
<main id="main" class="main" role="main">
  <?php
  if (have_posts()) {
    while (have_posts()) {
      the_post();
      echo get_the_content();
    }
  }
  ?>
  <div class="cms-page--single gutter--normal">
    <article class="flex set--w-100 html-block html-block--size-regular" style="" data-content-component="html-block" data-motion="{&quot;properties&quot;: &quot;opacity&quot;, &quot;children&quot;: &quot;.html-block__content > *&quot;}">

      <div class="html-block__content flex flex-direction-col set--w-100">
        <div class="html-block__copy set--text-after">
          <div class="html-block__body cms-generic-copy font-family--serif">
            <!-- <script src="https://cdn.occtoo.com/occtoo/uxcontainer/v3/ux-container.min.js"></script> -->
            <div class="news-page">
              <div id="app">
                <!---->
                <div>
                  <header data-v-1f12d4d2="" class="magazine-header magazine-header--narrow">
                    <!---->
                    <nav data-v-1f12d4d2="" class="magazine-menu magazine-menu--spaced"><a data-v-1f12d4d2="" href="#/cultureandcommitments" class="magazine-menu__back router-link-active"><span data-v-1f12d4d2="">Commitments and Culture</span></a></nav>
                  </header>
                  <article class="magazine-article">
                    <header data-v-7ce9f177="" class="article-hero article-hero--commitment" data-analytics-title="Article Header"><img data-v-7ce9f177="" alt="" class="article-hero__img" src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_TOPIMAGE_v2.jpg">
                      <div data-v-7ce9f177="" class="article-hero__content"><span data-v-7ce9f177="" class="article-hero__date">11/2021</span>
                        <div data-v-7ce9f177="" class="article-hero__breadcrumbs"><a data-v-7ce9f177="" href="#/cultureandcommitments" class="article-hero__breadcrumb-link router-link-active">Commitments and Culture </a><a data-v-7ce9f177="" href="#/cultureandcommitments/fondationcartierpourlartcontemporain" class="article-hero__breadcrumb-link router-link-active">Fondation Cartier pour l'art contemporain </a></div>
                        <h1 data-v-7ce9f177="" class="article-hero__title"><?= the_title() ?></h1>
                        <ul data-v-7ce9f177="" class="article-hero__social">
                          <li data-v-7ce9f177=""><a data-v-7ce9f177="" href="https://www.facebook.com/sharer/sharer.php?u=https://www.siellest.com/en-us/news.html/#/cultureandcommitments/fondationcartierpourlartcontemporain/2111-cc-fondation-great-animal-orchestra" target="_blank" data-analytics-title="Article Social Facebook" class="article-hero__social-link article-hero__social-link--facebook"><span data-v-7ce9f177="" class="sr-only">Facebook</span></a></li>
                          <li data-v-7ce9f177=""><a data-v-7ce9f177="" href="http://www.twitter.com/share/?url=https://www.siellest.com/en-us/news.html/#/cultureandcommitments/fondationcartierpourlartcontemporain/2111-cc-fondation-great-animal-orchestra&amp;text=<?= the_title() ?>" target="_blank" data-analytics-title="Article Social Twitter" class="article-hero__social-link article-hero__social-link--twitter"><span data-v-7ce9f177="" class="sr-only">Twitter</span></a></li>
                        </ul>
                      </div>
                    </header>
                    <div class="magazine-article__body">
                      <!---->
                      <div data-analytics-title="Article Rich Text 2" class="magazine-article__richtext">
                        <p>The Peabody Essex Museum and the Fondation Cartier pour l’art contemporain are proud to present <em>The Great Animal Orchestra,</em> open from 20th November to 22nd May 2022. &nbsp;</p>

                        <p>Step into an immersive three-dimensional electronic installation that celebrates our planet’s rich biodiversity and the wild soundscapes of the animal kingdom, co-created by musician and bioacoustician Bernie Krause and London design studio United Visual Artists.</p>

                        <p>To discover <em>The Great Animal Orchestra</em> virtually and become the conductor of nature’s vast musical ensemble, visit the digital experience here.</p>

                        <p>Over the course of nearly fifty years, Krause collected more than 5,000 hours of recordings of natural environments, including at least 15,000 terrestrial and marine species from around the world. Krause’s soundscapes reveal that within any ecosystem, each species has its own acoustic niche and human activities are increasingly silencing these great animal orchestras. Listen to an <a href="https://www.youtube.com/embed/EWHbRZBjpCs" target="_blank">exclusive interview about his work</a> in the context of the PEM exhibition.</p>
                      </div>
                      <div data-analytics-title="Article Slider">
                        <div class="article-slider flickity-enabled is-draggable" tabindex="0">
                          <div class="flickity-viewport" style="height: 510px; touch-action: pan-y;">
                            <div class="flickity-slider" style="left: 0px; transform: translateX(0%);">
                              <div class="article-slider__item is-selected" style="position: absolute; left: 0%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_01.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 100%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_02.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 200%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_03.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 300%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_04.jpg" data-flickity-lazyload="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_04.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 400%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_05.jpg" data-flickity-lazyload="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_05.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 500%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_06.jpg" data-flickity-lazyload="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_06.jpg"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 600%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_07.jpg" class="flickity-lazyloaded"></div>
                              <div class="article-slider__item" aria-hidden="true" style="position: absolute; left: 700%;"><img src="https://cdn.occtoo.com/cartier/magazine-media/Great-animal-orchestra_slide_08.jpg" class="flickity-lazyloaded"></div>
                            </div>
                          </div><button class="flickity-button flickity-prev-next-button previous" type="button" aria-label="Previous"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow"></path>
                            </svg></button><button class="flickity-button flickity-prev-next-button next" type="button" aria-label="Next"><svg class="flickity-button-icon" viewBox="0 0 100 100">
                              <path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" class="arrow" transform="translate(100, 100) rotate(180) "></path>
                            </svg></button>
                          <ol class="flickity-page-dots">
                            <li class="dot is-selected" aria-label="Page dot 1" aria-current="step"></li>
                            <li class="dot" aria-label="Page dot 2"></li>
                            <li class="dot" aria-label="Page dot 3"></li>
                            <li class="dot" aria-label="Page dot 4"></li>
                            <li class="dot" aria-label="Page dot 5"></li>
                            <li class="dot" aria-label="Page dot 6"></li>
                            <li class="dot" aria-label="Page dot 7"></li>
                            <li class="dot" aria-label="Page dot 8"></li>
                          </ol>
                        </div>
                        <div class="article-slider__text">
                          <!---->
                        </div>
                      </div>
                      <div data-analytics-title="Article Video" class="magazine-article__video"><iframe width="560" height="315" src="https://youtube.com/embed/EWHbRZBjpCs?rel=0&amp;playlist=EWHbRZBjpCs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen="allowfullscreen"></iframe></div>
                      <!---->
                      <section data-analytics-title="Article CTA" class="magazine-article__cta-holder"><a href="https://www.pem.org/exhibitions/the-great-animal-orchestra-bernie-krause-and-united-visual-artists" target="_blank" class="magazine-article__cta"> &nbsp;Discover the exhibition </a></section>
                    </div>
                  </article>
                  <div class="news-container" data-analytics-title="Article Latest News">
                    <div class="latest-news">
                      <h3 class="latest-news__title">Latest News</h3>
                      <div class="latest-news__body latest-news__body--commitment"><a data-v-3f71d0a0="" href="#/cultureandcommitments/fondationcartierpourlartcontemporain/2110-cc-fondation-depardon" class="push-link latest-news-item latest-news-item--commitment" data-analytics-title="Latest News Push">
                          <div class="latest-news-item__img" style="background-image: url(&quot;https://cdn.occtoo.com/cartier/magazine-media/depardon_LONGPUSH.jpg&quot;);"></div>
                          <div class="latest-news-item__date-holder"><span class="latest-news-item__date">10/2021</span></div>
                          <h4 class="latest-news-item__title">Triennale Milano and the Fondation Cartier present "La vita moderna": the largest exhibition of work by Raymond Depardon</h4>
                          <div class="latest-news__link-holder">
                            <div data-v-2633aa20="" class="square-arrow-link"></div>
                          </div>
                        </a><a data-v-3f71d0a0="" href="#/cultureandcommitments/fondationcartierpourlartcontemporain/2109-cc-fondationdamien-hirst" class="push-link latest-news-item latest-news-item--commitment" data-analytics-title="Latest News Push">
                          <div class="latest-news-item__img" style="background-image: url(&quot;https://cdn.occtoo.com/cartier/magazine-media/Damien_Hirst_LONGPUSH.jpg&quot;);"></div>
                          <div class="latest-news-item__date-holder"><span class="latest-news-item__date">09/2021</span></div>
                          <h4 class="latest-news-item__title">The "Damien Hirst, Cherry Blossoms" documentary: an exclusive insight into the artist at work</h4>
                          <div class="latest-news__link-holder">
                            <div data-v-2633aa20="" class="square-arrow-link"></div>
                          </div>
                        </a><a data-v-3f71d0a0="" href="#/cultureandcommitments/fondationcartierpourlartcontemporain/2109-cc-fondation-tadanori" class="push-link latest-news-item latest-news-item--commitment" data-analytics-title="Latest News Push">
                          <div class="latest-news-item__img" style="background-image: url(&quot;https://cdn.occtoo.com/cartier/magazine-media/tadanori_LONGPUSH.jpg&quot;);"></div>
                          <div class="latest-news-item__date-holder"><span class="latest-news-item__date">09/2021</span></div>
                          <h4 class="latest-news-item__title">The Fondation Cartier arrives in Tokyo with Tadanori Yokoo</h4>
                          <div class="latest-news__link-holder">
                            <div data-v-2633aa20="" class="square-arrow-link"></div>
                          </div>
                        </a></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- <script type="text/javascript">
              window.onload = loadContainer({

                customer: 'cartier',

                container: 'magazine',

                version: 3,

                targetDivId: 'live-container'

              });
            </script> -->
            <!-- <div id="live-container">
              <link href="https://cdn.occtoo.com/cartier/sites/magazine/v3/css/born-cartier-chunk-vendors.css" rel="stylesheet">
              <link href="https://cdn.occtoo.com/cartier/sites/magazine/v3/css/born-cartier-app.css" rel="stylesheet">
              <div id="app"></div>
              <script src="https://cdn.occtoo.com/cartier/sites/magazine/v3/js/born-cartier-chunk-vendors.js"></script>
              <script src="https://cdn.occtoo.com/cartier/sites/magazine/v3/js/born-cartier-app.js"></script>
            </div> -->
          </div>
        </div>
      </div>
    </article>
  </div>
</main>

<script src="wp-content/themes/Siellest/assets/js/born-siellest-app.js"></script>

<?php
get_footer();
?>