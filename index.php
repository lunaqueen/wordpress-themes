<?php
get_header();
?>

<div class="container">
    <div class="sidebar">
        <h3>信息栏</h3>
        <p>日期：<?php echo date('Y年n月j日'); ?></p>

        <!-- 总点击数 -->
        <?php
        $total_views = 0;
        $args = array('post_type' => 'post', 'posts_per_page' => -1);
        $query = new WP_Query($args);
        while ($query->have_posts()) : $query->the_post();
            $views = get_post_meta(get_the_ID(), 'views', true);
            $total_views += (int)$views;
        endwhile; wp_reset_postdata();
        ?>
        <p>总点击数：<?php echo $total_views; ?></p>

        <!-- 今日访问量（插件示例） -->
        <p>今日点击数：<?php echo wp_statistics_visitor('today'); ?></p>
    </div>

    <div class="content">
        <h2>随机文章</h2>
        <ul>
            <?php
            $args = array('orderby' => 'rand', 'posts_per_page' => 5);
            $random_posts = new WP_Query($args);
            while ($random_posts->have_posts()) : $random_posts->the_post();
            ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <h2>最近更新</h2>
        <ul>
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 5,
                'post_status' => 'publish',
            ));
            foreach ($recent_posts as $post) : ?>
                <li><a href="<?php echo get_permalink($post['ID']); ?>"><?php echo $post['post_title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<?php
get_footer();
?>
