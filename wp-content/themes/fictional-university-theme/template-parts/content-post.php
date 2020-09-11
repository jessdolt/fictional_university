<div class="post-item">
    <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <div class="metabox">
        <p>Posted by <?php the_author_posts_link()?> on <?php the_time('n.j.y')?> in <?php echo get_the_category_list(', ')?></p>
    </div>
    <div class="generic-content">
        <?php if(the_excerpt(  )){
                the_excerpt();
            } else{
                wp_trim_words(the_field('main_body_content'),10);
            }    ?>
        <p><a class="btn btn--blue" href="<?php the_permalink()?>">Continue Reading &raquo;</a></p>
    </div>
</div>