<?php get_header(); ?>

<main>
    <h1>欢迎来到 <?php bloginfo('name'); ?></h1>
    <p>这是您的个性化网站首页。</p>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <div><?php the_excerpt(); ?></div>
        </article>
    <?php endwhile; else : ?>
        <p>暂无内容。</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
