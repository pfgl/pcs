<?php
/*
 Template Name: Group
*/
?>

<?php get_header(); ?>

			<div id="content" class="wrapper">

				<div id="inner-content" class="container">

						<div id="main" role="main">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

                                <header class="article-header cf">

                                  <h1 class="entry-title page-title" itemprop="headline">
                                     <?php the_title(); ?>
                                  </h1>

                                </header> <?php // end article header ?>

<div class="entry-content cf" itemprop="articleBody">
                                    <div class="ifa-content">
                                        <?php the_content(); ?>
                                    </div>

				        <div class="ifa-map">
                             <a id="rutherford-wilkinson" onclick="selectThis('rutherford-wilkinson')" href="javascript:void(0);" class="bullet preview">Rutherford Wilkinson>
                                <img src="http://www.perspectivecorporate.co.uk/files/2016/02/RWltd_chartered-300x148.jpg" class="map-logo" id="map-logo-rutherford">
                            </a>

                            <a id="multiplex"  onclick="selectThis('multiplex')" href="javascript:void(0);" class="bullet preview">Multiplex
                                <img class="map-logo" id="map-logo-multiplex" src="http://www.perspectivecorporate.co.uk/files/2016/02/multiplex-logo-300x86.jpg" alt="multiplex logo">
                            </a>

                            <a id="wingham-wyatt" onclick="selectThis('wingham-wyatt')" href="javascript:void(0);" class="bullet preview">Wingham Wyatt Financial Services Ltd

                                <img class="map-logo" id="map-logo-wingham" src="http://www.perspectivecorporate.co.uk/files/2016/02/WW-300x163.jpg" alt="Microsoft Word - WWDoc Logo _2_">
                            </a>

                            <a id="perspective-financial" onclick="selectThis('perspective-financial')"  href="javascript:void(0);" class="bullet preview">Perspective Financial Management Ltd
                                <img class="map-logo" id="map-logo-pfm" src="http://www.perspectivecorporate.co.uk/files/2016/02/PWM-logo-white-300x61.jpg" alt="Print" >
                            </a>


                            <a id="equilibrium" onclick="selectThis('equilibrium')" href="javascript:void(0);" class="bullet preview">Equilibrium Wealth Management Limited
                                <img class="map-logo" id="map-logo-equi" src="http://www.perspectivecorporate.co.uk/files/2016/02/EWM_logosmall1-300x170.jpg" alt="EWM_logo(small)1">
                            </a>

                            <a id="shirebrook" onclick="selectThis('shirebrook')" href="javascript:void(0);" class="bullet preview">Shirebrook Wealth Management Limited
                                <img class="map-logo" id="map-logo-shirebrook" src="http://www.perspectivecorporate.co.uk/files/2016/02/ShirebrookLogo-300x102.gif" alt="ShirebrookLogo">
                            </a>

		                  </div><!--ifa-map-->
                        </div>

                                <footer class="article-footer">

                                </footer> <?php // end article footer ?>

							</article>

							<?php endwhile; else : ?>

                                <?php get_template_part ('partials/no-post-found');?>

							<?php endif; ?>

						</div>

						<?php get_sidebar(); ?>

				</div>

			</div>

<?php get_footer(); ?>
