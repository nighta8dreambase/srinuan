<?php get_header(); ?>

<div class="container">
    <div class="main">
            <?php if(have_posts()) : ?>
                <?php while ( have_posts() ) : the_post();  ?>
                    <article class="post">
                        <h3>
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <div class="meta">
                            Created By <?php the_author(); ?> on <?php the_time(); ?>
                        </div>
                        <?php if(has_post_thumbnail()): ?>
                            <div class="post-thumbnail">
                                <?php the_post_thumbnail(); ?>
                            </div>
                        <?php endif; ?>
                        <?php  the_excerpt(); ?>
                        <a class="button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>
                    </article>
                <?php endwhile; ?>
            <?php else : ?>
                <?php echo wpautop('No posts were found'); ?>
            <?php  endif; ?>
        </div>
    
<?php get_footer(); ?>
