<?php get_header(); ?>

<main class="container">

    <div class="grid grid-template-columns">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <div>
            <hgroup>

            <?php if ( has_post_thumbnail() ) : ?>

                <?php the_post_thumbnail('full'); ?>

            <?php endif; ?>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <p><?php the_excerpt(); ?></p>

            </hgroup>
        </div>

    <?php endwhile; else : ?>
        <p>Nenhum post encontrado.</p>
    <?php endif; ?>

    </div>

</main>

<?php get_footer(); ?>