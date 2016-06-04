<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php endwhile; endif; ?>

  <div class="grid grid-pad container">
    <section id="content" role="main">

      <div class="col-1-1">
        <h1 class="entry-title"><?php the_title(); ?></h1>
      </div>
      <div class="col-1-3">
        <div class="content profile">
          <img class="profile-image" src="https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg">
          <h2>Matt</h2>
          <p>CEO and Full Stack Developer</p>
        </div>
      </div>
      <div class="col-1-3">
        <div class="content profile">
          <img class="profile-image" src="https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg">
          <h2>Allison</h2>
          <p>Creative Director & UI Designer</p>
        </div>
      </div>
      <div class="col-1-3">
        <div class="content profile">
          <img class="profile-image" src="https://pbs.twimg.com/profile_images/378800000822867536/3f5a00acf72df93528b6bb7cd0a4fd0c.jpeg">
          <h2>Jeff</h2>
          <p>Head of Business Development</p>
        </div>
      </div>
      
      
      <div class="col-1-2">
        <div class="content about">
          <div class="line"></div>
          <?php the_field(text); ?>
          <div class="line"></div>
        </div>
      </div>
      <div class="col-1-2">
        <div class="content">
          <?php the_field(form); ?>
        </div>
      </div>

</section>
<?php get_footer(); ?>