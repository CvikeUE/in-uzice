<?php /* Template Name: Registration */ ?>


<?php get_header(); ?>


<form method="post" action="<?php echo get_template_directory_uri(); ?>/user-logic/register-logic.php">
    <?php wp_nonce_field('register_form', 'register_nonce'); ?>

    <label for="first_name">Ime:</label>
    <input type="text" name="first_name" id="first_name" />

    <label for="last_name">Prezime:</label>
    <input type="text" name="last_name" id="last_name" />

    <label for="user_email">Email:</label>
    <input type="email" name="user_email" id="user_email" />

    <label for="username">Username:</label>
    <input type="text" name="username" id="username" />

    <label for="user_password">Lozinka:</label>
    <input type="password" name="user_password" id="user_password" />

    <input type="submit" value="Registrujte se" />

</form>