<div class="post-item">
    <h2 class="headline headline--medium headline--post-title"><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
    <div class="generic-content">
        <?php if(the_excerpt(  )){
                the_excerpt();
            } else{
                wp_trim_words(the_field('main_body_content'),10);
            }    ?>
        <p><a class="btn btn--blue" href="<?php the_permalink()?>">View page &raquo;</a></p>
    </div>
</div>