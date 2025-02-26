<?php
/*
Website HEADER part.
- Includes <head> section
- Top header section with logo and menus
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body <?php body_class(); ?>>
    <header class="container container--header">
        <div class="header">
            <p>Čia headeris</p>
        </div>
    </header>