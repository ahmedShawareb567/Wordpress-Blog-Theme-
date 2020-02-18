<section class="singleSec">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-5 col-12">
                <div class="sidebarSec">
                    <?php dynamic_sidebar('sidebar-1')?>
                </div>
            </div>
            <div class="col-lg-8 col-md-7 col-12">
                <h4 class="catHeading"><?php single_cat_title();?></h4>
                <div class="postContent">
                     <?php if(have_posts()):?>
                    <?php
                    global $query_string;
                    parse_str( $query_string, $args );
                    //modify whatever you want
                    $args['post_type'] = 'post';
                    $args['cat'] = get_query_var('cat');
                    query_posts($args);?>
                    <?php while(have_posts()): the_post();?>
                    <div class="postsContent">
                            <figure>
                            <?php if(has_post_thumbnail()):?>
                            <img src="<?php the_post_thumbnail_url();?>" alt="banner"/>
                            <?php else:?>
                            <?php echo __('banner');?>
                            <?php endif;?>
                            <figcaption></figcaption>
                            </figure>
                            <h3><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
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
                     <?php wp_reset_postdata();?>
                     <?php else:?>
                     <?php endif;?>
                </div>
            </div>
        </div>
    </div>
</section>