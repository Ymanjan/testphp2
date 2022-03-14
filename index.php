<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package test
 */

get_header();
?>

<section class="block">
        <div class="container">
            <h4 class="title">Lorem ipsum dolor sit amet.</h4>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus odio sit voluptates, maiores quisquam placeat repellendus officiis veniam tenetur suscipit quas vitae amet eligendi aliquam?\</p>
        </div>
    </section>
    <section class="main-blok-1">
       <div class="container">
        <div class="menu-card">
            <div class="cards cards-1">
                <h4 class="title title-1">Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolor placeat. Nobis, nam dicta alias, culpa totam in omnis porro et, qui iusto voluptas laborum.</p>
                <a href="#">+</a>
            </div>
            <div class="cards cards-2">
                <h4 class="title title-2">Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, dolor placeat. Nobis, nam dicta alias, culpa totam in omnis porro et, qui iusto voluptas laborum.</p>
                <a href="#">+</a>
            </div>
            <div class="cards cards-3">
                <h4 class="title title-3">Lorem, ipsum.</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere, Lorem ipsum dolor sit amet consectetur, adipisicing elit. Porro obcaecati dolorem assumenda! Vero optio saepe modi veritatis, nisi dolore. dolor placeat. Nobis, nam dicta alias, culpa totam in omnis porro et, qui iusto voluptas laborum.</p>
                <a href="#">+</a>
            </div>
        </div>
       </div>
    </section>
    <section class="main-block-2">
        <div class="container">
            <div class="muzic">
                <h2 class="muzic_name">Music is all of a sudden much <br> more colorful</h2>
                <a href="#" class="button-2">Join now</a>
            </div>
        </div>
    </section>

<?php
get_sidebar();
get_footer();
