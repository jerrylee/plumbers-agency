<?php 
/*
 * Template Name: Locations Pages
*/
get_header(); ?>


<style>
.fa-star {
  color:gold;
}
</style>
<?php get_template_part('partials/splash'); ?>

<?php get_template_part('partials/intro-section'); ?>
<section class="city-content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                <h2>Ready to Grow Your Plumbing Business
<?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>
                ? </h2> <br /><h3>Improve Your Search Engine Visibility with Plumber SEO from Plumbers Agency.</h3>
<?php 
if(have_posts()):while(have_posts()):the_post(); ?>

<h4>It’s not enough to have an awesome looking website. Try going to Google and typing in: </h4>
<ul>
<li><strong>plumbing companies in <?php if(get_field('city')) { ?> 
<?php the_field('city'); ?> ,<?php } ?> <?php the_field('state'); ?> </strong></li>
OR
<li><strong>plumbers in <?php if(get_field('city')) { ?>
    <?php the_field('city'); ?> ,
<?php } ?> <?php the_field('state'); ?>. </strong> </li></ul>
If you don’t see your plumbing company’s website listed on the first page, other companies are getting the calls that you are missing. Plumbers Agency can help drive those calls to you. Our Search Engine Optimization experts are experienced in helping plumbing companies and contractors specifically get more targeted website traffic and convert more website visitors into calls and jobs.

If you are a plumbing company owner and wondering how you can get calls off the internet, you need a top SEO company to help take your business to the next level. Plumbers Agency is an SEO company with proven experience in the plumbing industry. Check out our <a href="services">services page</a>. 

<h3>See How Your Plumbing Website Measures Up</h3>
Contact Us to get your free website audit today. 469-321-1596



<h3><em>Local Marketing for Plumbers in <?php the_field('city'); ?> <?php the_field('state'); ?></em></h3>
<?php the_content();
endwhile; endif;
?>
                </div>
            </div>
<hr />
<div class="row">
<div class="col-sm-4"><img src="http://www.plumbersagency.com/wp-content/uploads/2016/11/happy-client.jpg" alt="Schrader Plumbing Customer" width="200px"></div>
<div class="col-sm-8">


<div itemscope itemtype="http://schema.org/Review">
     	<meta itemprop="description" content="<?php the_field('city'); ?> <?php the_field('state'); ?> Plumbing SEO services">
        <meta itemprop="datePublished" content="2017-03-01">
        <meta itemprop="worstRating" content="1">
        <link itemprop="url" href="http://www.plumbersagency.com/plumber-seo-internet-marketing-plumbing-companies-contractors-albuquerque/" rel="author"/>
       <h2> <a itemprop="url" href="http://www.plumbersagency.com/plumber-seo-internet-marketing-plumbing-companies-contractors-albuquerque/"><span itemprop="name" style="display:block;"><strong><?php the_field('city'); ?> <?php the_field('state'); ?> Plumbing SEO Review</strong></span></a>  <i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i><i class="fa fa-star" aria-hidden="true"></i></h2>
        <span itemprop="reviewBody" style="display:block;">I cannot say enough about the services I have received from Plumbers Agency. Over the last 3 years, my calls from the web have increased dramatically, and the team handles everything, leaving me to focus on what I do. I have tried to control growth, but it has exploded, I have had to add 3 new vans, and plumbers to keep up. </span><br />
		<span itemprop="author" itemscope itemtype="http://schema.org/Person" style="display:block;"><span itemprop="name">- <a href="https://www.schraderplumbing.com/" target="_blank">John Schrader</a></span></span>
        </div>
    </section><!--/city-content-->

    <section class="features section-padding" id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-7">
                    <div class="feature-list">
                        <h3>Book More Plumbing Jobs <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>.</p></h3>
                        <p>See how we have helped other plumbing companies grow their online plumbing leads.</p>
                        <ul class="features-stack">
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03e;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Beautiful, Engaging Website</h5>
                                    <p>Your website should reflect the quality of your work, and business, on all devices.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe040;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Local Market Visibility</h5>
                                    <p>Your customers are in your own neighborhood. With local SEO techniques, we make you a star in <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>.</p>
                                </div>
                            </li>
                            <li class="feature-item">
                                <div class="feature-icon">
                                    <span data-icon="&#xe03c;" class="icon"></span>
                                </div>
                                <div class="feature-content">
                                    <h5>Social Media</h5>
                                    <p>Next to Search Engines, social sites like Yelp, and Facebook are high target campaign areas. See how we can help you leverage these apps.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="device-showcase">
            <div class="devices">
                <div class="ipad-wrap wp1"></div>
                <div class="iphone-wrap wp2"></div>
            </div>
        </div>
        <div class="responsive-feature-img"><img src="<?php echo get_template_directory_uri(); ?>/img/devices.png" alt="Mobile Web Development for Plumbers <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>"></div>
    </section>
    <section class="features-extra section-padding" id="assets">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="feature-list">
                        <h3>Custom Software Development</h3>
                        <p>We design and develop custom software, such as portals to maintain your schedules, appointments, and dispatch, even maintain employee records.</p>
                        <p>Save time and have the capabilities of a full staff with a custom built application, that can not only retain information and data, but also text your techs their next appointment, notify customers you are on your way, and much more. </p>
                        <a href="#" class="btn btn-ghost btn-accent btn-small" data-toggle="modal" data-target="#myModal">Tell Me More!</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="macbook-wrap wp3"></div>
        <div class="responsive-feature-img"><img src="<?php echo get_template_directory_uri(); ?>/img/macbook-pro.png" alt="Web Design for Plumbing Companies <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>"></div>
    </section>
    <section class="blog-intro section-padding" id="blog">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3>Additional Services Available</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 leftcol">
                    <h5>Photography</h5>
                    <p>One of the most important parts of a website, is quality photographs. What makes a website stand apart from 75% of the others is quality content and photography. Our photographers are experiened at working with plumbers, and making your staff feel comfortable during the shoot. </p>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12 rightcol">
                    <h5>Videography</h5>
                    <p>Part of the strategy in online marketing in any business, is staying a step ahead of your competition. A search of plumbing companies will show a serious lack of quality images, and video. Our videographers and script writers can help your company stand out, and build the trust it takes for a customer to call.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="blog text-center">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/blog-img-01.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-img-01.jpg" alt="Plumbers SEO <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Photography</a></h2>
                            <p><a href="#" class="blog-post-title">Our photography team will make you look great! <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/blog-img-02.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-img-02.jpg" alt="Plumbers Marketing <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Videography</a></h2>
                            <p><a href="#" class="blog-post-title">Your video will make you stand out! <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <div class="col-md-4">
                    <article class="blog-post">
                        <figure>
                            <a href="<?php echo get_template_directory_uri(); ?>/img/blog-img-03.jpg" class="single_image">
                                <div class="blog-img-wrap">
                                    <div class="overlay">
                                        <i class="fa fa-search"></i>
                                    </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/blog-img-03.jpg" class="single_image" alt="Plumbing Web Apps <?php if(get_field('city') || get_field('state')) { ?> in <?php } ?>
<?php if(get_field('city')) { ?>
    <?php the_field('city'); ?>
<?php } ?>
<?php if(get_field('state')) { ?>
    <?php the_field('state'); ?>
<?php } ?>"/>
                                </div>
                            </a>
                            <figcaption>
                            <h2><a href="#" class="blog-category" data-toggle="tooltip" data-placement="top" data-original-title="See more posts">Script Writers</a></h2>
                            <p><a href="#" class="blog-post-title">Our script writers make your video interview simple! <i class="fa fa-angle-right"></i></a></p>
                            </figcaption>
                        </figure>
                    </article>
                </div>
                <a href="#" class="btn btn-ghost btn-accent btn-small" data-toggle="modal" data-target="#myModal">Get More Information</a>
            </div>
        </div>
    </section>
    <section class="sign-up section-padding text-center" id="download">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <h3>Get more information about our services today!</h3>
                    <p>Give us a call, and let's discuss your next project! </p>
                    <h3>(469) 321.1596</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="to-top">
        <div class="container">
            <div class="row">
                <div class="to-top-wrap">
                    <a href="#top" class="top"><i class="fa fa-angle-up"></i></a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>