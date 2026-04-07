<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <h1><?php bloginfo("name"); ?></h1>
    <p><?php bloginfo("description"); ?></p>
    <a href="#services" class="btn">Explore</a>
  </div>
</section>

<section class="section" id="services">
  <div class="container">
    <h2>What I Do</h2>

    <div class="grid">
      <div class="card">
        <h3>Web Development</h3>
        <p>I build fast and responsive websites using modern tools.</p>
      </div>

      <div class="card">
        <h3>WordPress Custom Themes</h3>
        <p>I design custom WordPress themes from scratch.</p>
      </div>

      <div class="card">
        <h3>UI/UX Design</h3>
        <p>I create clean interfaces that feel professional and modern.</p>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <h2>Latest Posts</h2>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="post">
        <h2>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p><?php the_excerpt(); ?></p>
      </div>
    <?php endwhile; else: ?>
      <p>No posts found.</p>
    <?php endif; ?>

  </div>
</section>

<?php get_footer(); ?>