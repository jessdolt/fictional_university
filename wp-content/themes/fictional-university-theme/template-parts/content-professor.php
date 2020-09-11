<div class="post-item">
    <li class="professor-card__list-item">
        <a class="professor-card" href="<?php the_permalink();?>">
            <img class="professor_card__image" 
            src="<?php the_post_thumbnail_url('professorLandscape');?>">
            <span class="professor_card__name"><?php the_title();?></span>
        </a>
    </li>
</div>