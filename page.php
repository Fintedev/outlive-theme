<?php get_header(); ?>

<main class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <div class="grid">
        <div>
            <hgroup>
                <?php if ( has_post_thumbnail() ) : ?>
                <?php the_post_thumbnail('full'); ?>
                <?php endif; ?>
            </hgroup>
        </div>

        <div>
            <h2><a href="<?php the_permalink(); ?>">
                    <?php the_title(); ?>
                </a></h2>
                <p><?php the_excerpt(); ?></p>
        </div>
    </div>

    <div class="grid">
        <div>
        <?php the_content(); ?>
        </div>
    </div>

    <?php endwhile; else : ?>
        <p>Nenhum post encontrado.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>