<?php
$location = "Dallas";

         if(is_page('139') || '139' == $post->post_parent) {
    $location = 'chicago';
  } else if(is_page('164') || '164' == $post->post_parent) {
    $location = 'albuquerque';
  }

?>
<style>
header {
  padding:10px 0;
}
.logo img {
  width:50%;
}
header .logo {
  width:20%;
}
#breadcrumbs {
  padding-top:15rem;
}

@media(max-width:760px) {
  header {
    padding:30px 0;
  }
  .logo img {
    width:50%;
  }
  header .logo {
    width:50%;
  }
}
</style>
<section class="hero-page">
        <section class="navigation fixed">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="http://www.plumbersagency.com/"><img src="http://www.plumbersagency.com/wp-content/uploads/2016/11/plumber-agency-logo-white.png" alt="Plumbing Company SEO Services"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="http://www.plumbersagency.com/plumber-seo-internet-marketing-plumbing-companies-contractors-<?php echo $location; ?>">Home</a></li>
                                <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>about-us">About Us</a></li>
                                <li>
<a href="http://www.plumbersagency.com/plumber-seo-internet-marketing-plumbing-companies-contractors-<?php echo $location; ?>/services/">Services</a></li>
                                <li><a href="#download">Contact Us</a></li>
                            </ul>
                            <ul class="member-actions">
                                <li><a href="tel:469-321-1596" class="login btn-white btn-small"><strong>469-321-1596</strong></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="navicon">
                        <a class="nav-toggle" href="#"><span></span></a>
                    </div>
                </div>
            </header>
        </section>