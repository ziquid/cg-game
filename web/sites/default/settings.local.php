<?php

// ZG Docker settings

$db_url['default'] = 'mysqli://drupal:Drup4l.P455w0rd@db/drupaldb';

$db_url['game_stlouis'] = 'mysqli://drupal:Drup4l.P455w0rd@db/uslce_game';
$db_url['game_stlouis_slave'] = $db_url['game_stlouis'];

$db_url['game_cg'] = 'mysqli://drupal:Drup4l.P455w0rd@db/cg_game';
$db_url['game_detroit'] = 'mysqli://drupal:Drup4l.P455w0rd@db/detroit_game';
$db_url['game_stl1904'] = 'mysqli://drupal:Drup4l.P455w0rd@db/stl1904_game';
$db_url['game_wonderland'] = 'mysqli://drupal:Drup4l.P455w0rd@db/wonderland_game';

$db_prefix = '';

/**
 * Base URL (optional).
 *
 * If you are experiencing issues with different site domains,
 * uncomment the Base URL statement below (remove the leading hash sign)
 * and fill in the URL to your Drupal installation.
 *
 * You might also want to force users to use a given domain.
 * See the .htaccess file for more information.
 *
 * Examples:
 *   $base_url = 'http://www.example.com';
 *   $base_url = 'http://www.example.com:8888';
 *   $base_url = 'http://www.example.com/drupal';
 *   $base_url = 'https://www.example.com:8888/drupal';
 *
 * It is not allowed to have a trailing slash; Drupal will add it
 * for you.
 */
$base_url = 'http://zg.docker.localhost';  // NO trailing slash!