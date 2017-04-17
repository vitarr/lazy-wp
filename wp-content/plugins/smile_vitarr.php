<?php

/**
 * @package smile_victor
 * @version 1.0
 */
/*
  Plugin Name: Smile of Victor
  Description: This is not just a plugin, it is smile
  Author: Victor
  Version: 1.0
 */


add_action('the_title', function($title) {
    $title .= ':)';
    return $title;
});
