 <!DOCTYPE html>
<html>

<head>
  <title><?php bloginfo('name');?></title>
  <meta charset="<?php bloginfo('charset');?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <?php wp_head();?>
</head>

<body>
  <!-- Header starts here -->
  <header id="Header">
    <nav class="main-navigation">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="logo">
              <a href="<?php bloginfo('url');?>"><img src="<?php echo get_template_directory_uri();?>'/assets/images/logo.png'" alt="Logo"></a>
            </div>
          </div>
          <div class="col text-right">
            <div class="menu-wrap">
              <div id="nav-icon1">
                <span></span>
                <span></span>
                <span></span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </nav>
     <div class="mobile-menu">
      <?php wp_nav_menu([
        'theme_location' => 'top'
      ]);?>   
 
    </div>    
  </header>
  <!-- Header ends here -->
  <!-- Banner starts here -->
  <section id="HeroBanner">
    <div id="BannerSlider" class="owl-carousel">
      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="banner-text">
                <h1>Our work is dedicated to the<br /> prosperity of our clients! </h1>
                <p> Lorem ipsum dolor sit amet, consec tetuer
                  <br /> adipiscing elit. Praesent vestibu lum molestie
                  <br />lacus. Aenean nonummy hendrerit
                  <br />maurishasellus </p>
                <div class="bannet-cta">
                  <div class="cta-1">
                    <a href="#">Click Here</a>
                  </div>
                  <div class="cta-2">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="banner-text">
                <h1>Discover the Business Secrets for <br/>Your SUCCESS!</h1>
                <p>Lorem ipsum dolor sit amet, consectetur
                  <br/>adipisicing elit. Labore sapiente cumque,
                  <br/>sequi aperiam quae repellendus.</p>
                <div class="bannet-cta">
                  <div class="cta-1">
                    <a href="#">Click Here</a>
                  </div>
                  <div class="cta-2">
                    <a href="#">Read More</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>