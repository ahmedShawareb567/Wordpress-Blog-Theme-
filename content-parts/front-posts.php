<section class="postsSec">
    <div class="container">
    <h2>Posts:</h2>
        <div class="row">
        <?php 
            $args_arr = array(
                'post_type' => 'post',
                'post_per_page' => 8
            );
            $theQuery = new WP_Query($args_arr);
        ?>
            <?php if($theQuery->have_posts()): while($theQuery->have_posts()): $theQuery->the_post();?>
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
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
                            <div class="categorySec">
                            <?php if(has_category()):?>
                            <?php the_category('-');?>
                            <?php else: ?>
                            <?php __('No Category')?>
                            <?php endif;?>
                            </div>
                            <p><?php the_excerpt();?></p>
                        </div>
                </div>
            <?php endwhile;?>
            <?php else:?>
            <?php __('There is no posts Supported Here :(');?>
            <?php endif;?>
        </div>
    </div>
</section>