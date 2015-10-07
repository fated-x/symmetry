<?php

// The Header-image.
$defaults = array(
    'default-image'   => '',
    'width'           => 0,
    'height'          => 0,
    'flex-width'      => true,
    'flex-height'     => true,
    'uploads'         => true,
    'random-default'  => false,
    'header-text'     => true,
    'default-text-color'  => '000',
    'wp-head'             => '',
    'admin-head-callback' => '',
    'admin-preview-callback' => '',
);

add_theme_support('custom-header', $defaults);

?>