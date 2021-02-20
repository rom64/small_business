<?php get_header();?>
  <!-- Features section starts here -->
  <section id="Gain">
    <div class="container">
      <div class="title text-center">
        <h3>Gain The Knowledge you Need to Succeed</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
      </div>
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
          <div class="each-icon box-1">
            <div class="icon-wrap">
              <i class="fa fa-cogs"></i>
            </div>
            <div class="icon-text">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
              <div class="cta">
                <a title="Read More" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
          <div class="each-icon box-2">
            <div class="icon-wrap">
              <i class="fa fa-chart-pie"></i>
            </div>
            <div class="icon-text">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
              <div class="cta">
                <a title="Read More" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
          <div class="each-icon box-3">
            <div class="icon-wrap">
              <i class="fa fa-tachometer-alt"></i>
            </div>
            <div class="icon-text">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
              <div class="cta">
                <a title="Read More" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
          <div class="each-icon box-4">
            <div class="icon-wrap">
              <i class="fa fa-cubes"></i>
            </div>
            <div class="icon-text">
              <h3>Title</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
              <div class="cta">
                <a title="Read More" href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Features section ends here -->
  <!-- Laptop section starts here -->
  <section id="Laptop">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 ">
        <?php the_field('laptop-img');?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
          <div class="laptop-text">
            <h2><?php the_field('laptop-title');?></h2>
            <?php the_field('laptop-text');?>
            <a href="#">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Laptop section ends here -->
  <!-- video section starts here -->
  <section id="Video">
    <div class="image-wrap">     
        <img src="<?php echo get_template_directory_uri();?>/assets/images/video.jpg" alt="Video Thumbnail">
    </div>
    <div class="video-icon">
      <h3>Video</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        <br class="d-none d-lg-none d-xl-block" />Labore sapiente cumque est, quaerat sequi aperiam quae repellendus.</p>
      <a class="popup-youtube-wst" href="https://www.youtube.com/watch?v=ScMzIvxBSi4"><i class="fas fa-play"></i></a>
    </div>
  </section>
  <!-- video section ends here -->
 <?php get_sidebar();?>
  <!-- Contact us section starts here -->
  <section id="ContactUs">
    <div class="container contact-container">
      <h3 class="contact-title">Get In Touch</h3>
      <div class="contact-outer-wrapper">
        <div class="form-wrap">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
          <?php echo do_shortcode('[contact-form-7 id="23" title="Get In Touch"]');?>
      
        </div>
        <div class="address-block">
          <p class="add-title">Contact Details</p>
          <div class="c-detail">
            <div class="c-icon"><i class="fas fa-address-book" aria-hidden="true"></i></div>
            <div class="c-info">
              <h4>Address</h4>
              <p><?php the_field('address');?></p>
            </div>
          </div>
          <div class="c-detail">
            <div class="c-icon"><i class="fas fa-phone-square" aria-hidden="true"></i></div>
            <div class="c-info">
              <h4>Mobile</h4>
              <p><a href="tell:+1234567890"><?php the_field('tel');?></a></p>
            </div>
          </div>
          <div class="c-detail">
            <div class="c-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
            <div class="c-info">
              <h4>Email</h4>
              <p><a href="mailto:abc@abc.com"><?php the_field('mail');?></a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact us section ends here -->
  
<?php get_footer();?>