<?php get_header(); ?>

<main id="content" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1><?php the_title(); ?></h1>
            </header>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>

        <?php comments_template(); ?>
    <?php endwhile; ?>
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
