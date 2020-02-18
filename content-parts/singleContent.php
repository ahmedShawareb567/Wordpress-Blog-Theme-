<section class="singleSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="sidebarSec">
                    <?php dynamic_sidebar('sidebar-1')?>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <div class="postContent">
                    <?php
                    $categories = get_the_category();
                    $category_id = $categories[0]->cat_ID;
                    ?>
                    <div class="bradSec">
                        <a href="<?php echo get_category_link($category_id);?>">/<?php echo $categories[0]->cat_name?></a>
                    </div>
                        <?php if(have_posts()): while(have_posts()): the_post();?>
                        <div class="postsContent">
                            <figure>
                            <?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url();?>" alt="banner"/>
                            <?php else:?>
                            <?php echo __('banner');?>
                            <?php endif;?>
                            <figcaption></figcaption>
                            </figure>
                            <h3><?php the_title();?></h3>
                            <h4><?php the_date('Y-m-d', '','');?><p><?php the_time();?></p></h4>
                            <div class="categorySec">
                            <?php if(has_category()):?>
                            <?php the_category('-');?>
                            <?php else: ?>
                            <?php __('No Category')?>
                            <?php endif;?>
                            </div>
                            <p><?php the_content();?></p>
                        </div>
            <?php endwhile;?>
            <?php echo do_shortcode("[wpdiscuz_comments]");?>
            <?php wp_reset_postdata();?>
            <?php else:?>
            <?php __('There is no posts Supported Here :(');?>
            <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>