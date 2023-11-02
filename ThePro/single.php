<?php get_header(); ?>

<main id="content" role="main">
    <?php while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header>
                <h1><?php the_title(); ?></h1>
                <div class="post-meta">
                    <span class="post-date"><?php the_date(); ?></span>
                    <span class="post-author">By <?php the_author(); ?></span>
                </div>
            </header>
            <div class="post-content">
                <?php the_content(); ?>
            </div>
        </article>

        <nav class="post-navigation">
            <div class="previous-post"><?php previous_post_link('%link', '&laquo; %title'); ?></div>
            <div class="next-post"><?php next_post_link('%link', '%title &raquo;'); ?></div>
        </nav>

        <?php comments_template(); ?>
    <?php endwhile; ?>
</main>


<?php get_footer(); ?>
