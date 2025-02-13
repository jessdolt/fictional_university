<?php 
get_header();
pageBanner(array(
  'title' =>'All Programs',
  'subtitle' => 'There is something for everyone. Have a look'
  )
);
?>

<div class='container container--narrow page-section'>
  <?php 
    echo '<ul class="link-list min-list">';
    while(have_posts()){
        the_post(); ?>
        <li>
            <a href="<?php the_permalink();?>">
                <?php the_title();?>
            </a>
        </li>
    <?php
        }
    echo '</ul>';
    ?>
</div>
<?php
get_footer();
?>