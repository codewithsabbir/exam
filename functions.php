<?php 

wp_enqueue_style( 'style-name', get_stylesheet_uri() );
wp_enqueue_style( 'style-bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
wp_enqueue_script( 'script-name', get_template_directory_uri() . 'assets/js/bootstrap.bundle.min.js', array(), '1.0.0', true );

add_theme_support( 'title-tag' );
add_theme_support( 'custom-logo' );
add_theme_support( 'post-thumbnails' );


register_nav_menus(array(
    'TM'=>'Primary',
));

register_sidebar([
    'name'=>'BD LOGO',
    'id'=>'bdlogo',
    'before_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'HERO TITLE',
    'id'=>'herotitle',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'CARD 1',
    'id'=>'card1',
    'before_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'PHOTO LEFT',
    'id'=>'pl',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'PHOTO TITLE',
    'id'=>'ptitile',
    'before_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'PHOTO RIGHT',
    'id'=>'pr',
    'before_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'RECENT PHOTO 1',
    'id'=>'rp1',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'NEWS TITLE',
    'id'=>'ntitile',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'FOOTER LEFT',
    'id'=>'ftl',
    'before_widget'=>'',
    'after_widget'=>'',
]);
register_sidebar([
    'name'=>'FOOTER TOP LEFT',
    'id'=>'ftr',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'FOOTER BOTTOM LEFT',
    'id'=>'fbl',
    'before_widget'=>'',
    'after_widget'=>'',
]);

register_sidebar([
    'name'=>'FOOTER BOTTOM RIGHT',
    'id'=>'fbr',
    'before_widget'=>'',
    'after_widget'=>'',
]);




 ?>