<?php

/*
* Template Name: Grant Application
* Template Post Type: kcp_application
*/
get_header()?>

<div class="application-display">
    <h2><?php the_title("Applicant: ")?></h2>
    <div class="responses">
        <div class="univ">    
            <h3><?php echo get_post_meta(get_the_ID(), 'University', true) ?> University</h3>
        </div>
        <div class="email">    
            <h3>Email:</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Email', true) ?></p>
        </div>
        <div class="status">    
            <h3><?php echo get_post_meta(get_the_ID(), 'Service Status', true) ?> to a service program</h3>
        </div>
        <div class="dates">    
            <h3>Service dates:</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Start date', true) ?> through 
               <?php echo get_post_meta(get_the_ID(), 'End date', true) ?> </p>
        </div>
        <div class="question">    
            <h3>Where do you hope to serve?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Where do you hope to serve?', true) ?></p>
        </div>
        <div class="question">    
            <h3>Why do you want to serve?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Why do you want to serve?', true) ?></p>
        </div>
        <div class="question">    
            <h3>What do you hope to learn from serving?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'What do you hope to learn from serving?', true) ?></p>
        </div>
        <div class="question">    
            <h3>To which agencies or programs have you applied and/or been accepted?</h3>
            <p><?php echo get_post_meta(get_the_ID(), "To which agencies or programs have you applied and/or been accepted?", true) ?></p>
        </div>
    </div>
    <?php $email = get_post_meta(get_the_ID(), 'Email', true);
    echo "<a href='mailto:".$email."'>Send a message to this applicant</a>"?>
</div>
<?php get_footer(); ?> 
