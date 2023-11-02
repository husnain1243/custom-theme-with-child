<?php 
    /* Template Name: custom home template */
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
        <div class="col-12">
            custom home template 
        </div>
    </div>
</div>


<?php
get_footer();
?>