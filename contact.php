<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<main class="wrap">
  <section class="content-area content-thin">
    <article class="article-full">
      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <header>
          <h2><?php the_title(); ?></h2>
        </header>
        <div class="entry-content">
          <?php the_content(); ?>
        </div>
      <?php endwhile; endif; ?>
      <!-- Contact Form Goes Here -->
      <div class="contact-form">
        <h3>Contact Us</h3>
        <form action="" method="post">
          <label for="name">Name:</label>
          <input type="text" name="name" id="name" required>
          
          <label for="email">Email:</label>
          <input type="email" name="email" id="email" required>
          
          <label for="message">Message:</label>
          <textarea name="message" id="message" required></textarea>
          
          <input type="submit" value="Submit">
        </form>
      </div>
    </article>
  </section>
  <?php get_sidebar(); ?>
</main>

<?php get_footer(); ?>
