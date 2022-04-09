<?php
/*
Template Name: Dogma Sign In
*/

$GLOBALS['light_header'] = true;

get_header(); ?>


    <div class="main-content mr-sign-in-page">

        <div class="mr-section">

           <form class="sign-in-form" action=https://secure.petexec.net/remoteLogin.php
            method="POST">

            <input class="field-input" type="text" name="username" id="username" placeholder="name" tabindex="1" />
            <input class="field-input" id="password" type="password" name="password" placeholder="password" tabindex="2" /> 

              <div class="submit">

                <input type="submit" name="submitButtonName" id="submitButtonName" value="Login" tabindex="3" />
                <a class="forgot-pw" href="https://secure.petexec.net/lostPassword.php">forgot Username?</a>

              </div> <!-- .Submit -->

            </form> <!-- .Form -->

        </div><!-- .mr-section -->

    </div><!-- .main-content -->

<?php get_footer();