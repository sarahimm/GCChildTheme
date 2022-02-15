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
            <p><?php echo get_post_meta(get_the_ID(), 'Email', true) ?></p><br>
            <h3>Phone:</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Phone', true) ?></p><br>
            <h3>Address:</h3> <br>
            <p><?php echo get_post_meta(get_the_ID(), 'Address', true) ?></p>
        </div>
       <div class="question">    
            <h3>To which agencies or programs have you applied and/or been accepted?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Agencies', true) ?></p>
        </div>
        <div class="question">    
            <h3>If you have been accepted, how long is your commitment to service?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Length',true)?></p>
        </div>
        <div class="question">    
            <h3>If you have been accepted, at which potential location(s) will you serve?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Where', true) ?></p>
        </div>
        <div class="question">    
            <h3>In what extracurricular activities and hobbies are you involved?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Activities', true) ?></p>
        </div>
        <div class="question">    
            <h3>Why do you want to serve? What motivates your choice for post-graduate service?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Why', true) ?></p>
        </div>
        <div class="question">    
            <h3>Describe an earlier volunteer service experience. What did you learn about others and yourself in this opportunity?</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Experience', true) ?></p>
        </div>
        <div class="question">    
            <h3>Post-graduate service often presents many new challenges. Describe a challenge you've experienced and what steps you took to meet this challenge.</h3>
            <p><?php echo get_post_meta(get_the_ID(), 'Challenge', true) ?></p>
        </div>
        
    </div>
    <?php $email = get_post_meta(get_the_ID(), 'Email', true);
    echo "<a href='mailto:".$email."'>Send a message to this applicant</a>"?>
</div>
<?php get_footer(); ?> 
