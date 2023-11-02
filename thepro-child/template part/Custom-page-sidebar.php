<?php 
    /* Template Name: custom sidebar template */
    get_header();
?>

<div>
    <div>
        <?php
            while(have_posts()):
                the_post();
                get_template_part('template-parts/content/content' , 'page');
                if(comments_open() || get_comments_number()){
                    comments_template();
                }
            endwhile;
        ?>
    </div>
</div>

<div id="custom_case_main_container" class="container">
    <div class="row">
        <div class="col-8">
            sidebar main page
        </div>
        <div class="col-4">
            sidebar area container
            <div id="custom-widget-area">
                <?php if (is_active_sidebar('custom-widget-area')) {
                    dynamic_sidebar('custom-widget-area');
                } ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>