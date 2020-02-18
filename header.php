<!DOCTYPE html>
<html <?php language_attributes();?>>
    <head>
        <title><?php wp_title(' | '.esc_html(bloginfo('name')),true,'left');?></title>
        <meta charset="<?php bloginfo('charset');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0,shrink-to-fit=no">
        <meta name="description" content="<?php bloginfo('description');?>">
        <meta name="keywords" content="<?php bloginfo('description');?>">
        <meta name="author" content="Ahmed shawareb">
        <?php wp_head();?>
    </head>
    <body>
        <section class="headerSec">
                <?php include_once('mainNavbar.php');?>
                <div class="headerContent">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <h3><?php the_title();?> Page</h3>
                                <p> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dumm
                                    is simply dummy text of the printing and  standard dumm
                                </p>
                                <a href="#"><i class="fa fa-archive"></i>More <i class="fa fa-angle-double-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
        </section>