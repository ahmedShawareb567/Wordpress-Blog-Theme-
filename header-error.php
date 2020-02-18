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
                                <h3>404 Error Page</h3>
                            </div>
                        </div>
                    </div>
                </div>
        </section>