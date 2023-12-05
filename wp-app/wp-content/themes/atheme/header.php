<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />



        <?php
        wp_head();
        ?>

<style>

        .navbar-nav > li {
            margin-right: 15px; /* Adjust the value as needed */
        }


        .navbar-nav > li > a {
            text-decoration: none;
            color: white;
        }
    </style>

    </head>
    <body>
        <!-- Navigation Bar -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark py-3";>
            <div class="container">
                <a class="navbar-brand" style='color: rgba(255, 165, 0, 1.0); font-size: 20px; padding-right: 10px; font-size: 30px;'>
                    <?php
                    echo get_bloginfo('name');
                    ?>
                </a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarResponsive"
                    aria-controls="navbarResponsive"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">


                <?php

                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme_location' => 'primary',
                        'items_wrap' => '<ul id="" class="navbar-nav ml-auto">%3$s</ul>'
                    )
                );

                ?>
                 <?php
         get_search_form();
         ?>
                </div>
            </div>
        </nav>

         <!-- Hero Section -->
