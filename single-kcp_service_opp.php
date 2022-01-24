<?php

/*
* Template Name: Service Opportunity
* Template Post Type: kcp_service_opp
*/
get_header()?>

<div class="service-opp-display">
    <h2><?php the_title()?></h2>
        <div class="deadline">    
            <h3>Deadline: <?php echo get_post_meta(get_the_ID(), 'Deadline', true) ?></h3>
        </div>
        <div class="desc">    
            <p><?php the_content() ?></p>
        </div>
    <?php $href = get_post_meta(get_the_ID(), 'URL', true);
    echo "<a href='".$href."'>Visit Program Website</a>"?>
</div>
<?php get_footer(); ?> 
