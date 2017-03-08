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
   <section class="hero">
        <section class="navigation fixed">
            <header>
                <div class="header-content">
                    <div class="logo"><a href="http://www.plumbersagency.com/"><img src="http://www.plumbersagency.com/wp-content/uploads/2016/11/plumber-agency-logo-white.png" alt="Plumbing Company SEO Services"></a></div>
                    <div class="header-nav">
                        <nav>
                            <ul class="primary-nav">
                                <li><a href="#features">Our Services</a></li>
                                <li><a href="#assets">Custom Software</a></li>
                                <li><a href="#blog">Other Services</a></li>
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
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="hero-content text-center">
                        <h1>An SEO Agency for Plumbing Companies
                        <?php if(get_field('city') || get_field('state')) { ?> in <br /><?php } ?>
                        <?php if(get_field('city')) { ?>
                            <?php the_field('city'); ?>
                        <?php } ?>
                        <?php if(get_field('state')) { ?>
                            <?php the_field('state'); ?>
                        <?php } ?>
                        </h1>
                        <p class="intro">We specialize in web design and online marketing for plumbing companies.</p>
                        <h4>Free Online Marketing Consultation - Call (469) 321.1596</h4>
                        <a href="#" class="btn btn-accent btn-large"  data-toggle="modal" data-target="#myModal">Get Started</a>

<h3 style="margin-top:2rem; color:#fff;">See How Your Plumbing Website Measures Up</h3>
<span style="color:#fff;">Call now to find out whether your website could benefit from our plumbing company SEO services:</span>
<h3 style="color:#fff;">469-321-1596</h3>
                    </div>
                </div>
            </div>
        </div>
        <div class="down-arrow floating-arrow"><a href="#"><i class="fa fa-angle-down"></i></a></div>
    </section>