<?php
get_header();
?>

<div class="container">
    <div class="sidebar">
        <!-- 侧边栏同首页 -->
        <p>日期：<?php echo date('Y年n月j日'); ?></p>
    </div>

    <div class="content">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h1><?php the_title(); ?></h1>
            <p><?php the_content(); ?></p>
            <p>—— <?php the_author(); ?></p>
        <?php endwhile; endif; ?>

        <h3>相关作品</h3>
        <ul>
            <?php
            $related = get_posts(array(
                'numberposts' => 5,
                'post__not_in' => array(get_the_ID()),
                'category__in' => wp_get_post_categories(get_the_ID())
            ));
            foreach ($related as $post) : setup_postdata($post); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endforeach; wp_reset_postdata(); ?>
        </ul>
    </div>
</div>

<?php
get_footer();
?>
