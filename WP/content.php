<div class="containers cover bgred">
  <div class="container">
    <div class='content cover'>
      <section class="beautiful-form">
        <figure class='chair cover'>
          <figcaption class="chair-text">
            <h1>لورم ایپسوم متن ساختگی با تولید</h1>
            <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و</p>
          </figcaption>
          <img src="./images/chair.png" alt="">
        </figure>
      </section>
    </div>
  </div>
</div>
<div class="containers cover">
  <h2 class="divide-header">اعضای تیم</h2>
</div>
<?php 
  $args = array(
    'post_type' => 'Member',
    'orderby' => 'title',
    'order' => 'ASC',
  );

  $query = new WP_Query($args);
  $ClassName = "odd";

  if($query->have_posts()){
    while($query->have_posts()){
      $query->the_post();
      // echo '<h1>'.get_the_title().'</h1>';
      // the_content();
 ?>
<div class="containers member cover <?php echo $ClassName; ?> ">
  <article class="cover">
    <img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>" alt="">
    <div class="info">
      <h3 class="title"><?php echo get_the_title(); ?></h3><br />
      <span class="role">لورم ایپسوم</span><br />
      <p class="abastract">
        <?php the_content(); ?>
      </p>
    </div>
  </article>
</div>
<?php 
    if($ClassName == "odd") $ClassName = "even";
    else $ClassName = "odd";
  }
    }
?>
<!-- <div class="containers member cover even">
  <article class="cover">
    <img src="./images/2.jpg" alt="">
    <div class="info">
      <h3 class="title">لورم ایپسوم</h3><br />
      <span class="role">لورم ایپسوم</span><br />
      <p class="abastract">
        لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها و
      </p>
    </div>
  </article>
</div> -->