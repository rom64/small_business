 <section id="OurWork" class="clearfix">
  <div class="container">
    <div class="title text-center">
      <h3>Our Work</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore sapiente cumque est, quaerat sequi aperiam quae repellendus. Aspernatur corrupti eos quam beatae, voluptatibus nemo distinctio ad suscipit, et officia velit.</p>
    </div>
  </div>
  <div class="filter-list">
    <ul>
      <li class="active" data-filter="all">All
      </li>
      <li data-filter="branding">Branding
      </li>
      <li data-filter="marketing">Marketing
      </li>
      <li data-filter="media">Media
      </li>
      <li data-filter="photography">Photography
      </li>
      <li data-filter="web-design">Web Design
      </li>
    </ul>
  </div>

  <div class="filter-box clearfix">


    <?php
    $posts = get_posts( array(
      'numberposts' => 3,
      'category_name'    => 'branding',
      'order'       => 'DESC',
      'post_type'   => 'post',

    ) );

    foreach( $posts as $post ){
      setup_postdata($post);
      ?>

      <div class="each-box all scale-anm branding">
        <div class="each-box-img">
          <?php the_post_thumbnail();?>
        </div>
        <div class="each-box-text-wap">
          <div class="each-box-text">
            <h3><?php the_field('work_title');?></h3>
            <p><?php the_field('work_text');?></p>
            <a title="Read More" href="#" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
          </div>
        </div>
      </div>
      <?php
      }

      wp_reset_postdata(); // сброс
?>
<?php
$posts = get_posts( array(
  'numberposts' => 3,
  'category_name'    => 'marketing',
  'order'       => 'DESC',
  'post_type'   => 'post',

) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>

  <div class="each-box all scale-anm marketing">
    <div class="each-box-img">
      <?php the_post_thumbnail();?>
    </div>
    <div class="each-box-text-wap">
      <div class="each-box-text">
        <h3><?php the_field('work_title');?></h3>
        <p><?php the_field('work_text');?></p>
        <a title="Read More" href="#" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
}

wp_reset_postdata(); // сброс
?>
<?php
$posts = get_posts( array(
  'numberposts' => 3,
  'category_name'    => 'media',
  'order'       => 'DESC',
  'post_type'   => 'post',

) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>

  <div class="each-box all scale-anm media">
    <div class="each-box-img">
      <?php the_post_thumbnail();?>
    </div>
    <div class="each-box-text-wap">
      <div class="each-box-text">
        <h3><?php the_field('work_title');?></h3>
        <p><?php the_field('work_text');?></p>
        <a title="Read More" href="#" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
}

wp_reset_postdata(); // сброс
?>
<?php
$posts = get_posts( array(
  'numberposts' => 3,
  'category_name'    => 'photography',
  'order'       => 'DESC',
  'post_type'   => 'post',

) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>

  <div class="each-box all scale-anm photography">
    <div class="each-box-img">
      <?php the_post_thumbnail();?>
    </div>
    <div class="each-box-text-wap">
      <div class="each-box-text">
        <h3><?php the_field('work_title');?></h3>
        <p><?php the_field('work_text');?></p>
        <a title="Read More" href="#" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
}

wp_reset_postdata(); // сброс
?>
<?php
$posts = get_posts( array(
  'numberposts' => 3,
  'category_name'    => 'web-design',
  'order'       => 'DESC',
  'post_type'   => 'post',

) );

foreach( $posts as $post ){
  setup_postdata($post);
  ?>

  <div class="each-box all scale-anm web-design">
    <div class="each-box-img">
      <?php the_post_thumbnail();?>
    </div>
    <div class="each-box-text-wap">
      <div class="each-box-text">
        <h3><?php the_field('work_title');?></h3>
        <p><?php the_field('work_text');?></p>
        <a title="Read More" href="#" target="_blank"><i class="fa fa-arrow-right" aria-hidden="true"></i></a>
      </div>
    </div>
  </div>
  <?php
}

wp_reset_postdata(); // сброс
?>

</div>
</section>