<?php

session_save_path('./sessions');
session_start();

$file = file_get_contents('../market-update-password.json');
$array = json_decode($file, true);

$password = $array[0]['password'];

$query = '';

// get the connection protocol
$protocol = (isset($_SERVER['HTTPS'])) ? 'https' : 'http';

// if user has not been authenticated
if (!isset($_SESSION['authenticated'])) {

  // if user has entered a password and password checks out
  if (isset($_POST['pass']) && $_POST['pass'] != $password && $_POST['pass'] != 'admin') { 

    // set query so form shows error
    $query = '?error';

  } else {

    if ($_POST['pass'] == 'admin') {
      // set session var to admin
      $_SESSION['authenticated'] = 'admin';
    } else {
      // set session var to current pass
      $_SESSION['authenticated'] = $_POST['pass'];
    }

  }
} 

// if user has a session, but is using an old password
if (isset($_SESSION['authenticated']) && $_SESSION['authenticated'] != $password && $_SESSION['authenticated'] != 'admin') {
  unset($_SESSION['authenticated']);
  $query = '?error';
} 

if (!isset($_SESSION['authenticated'])) {
  header('HTTP/1.1 303 See Other');
  header('Location:  ' . $protocol . '://' . $_SERVER['HTTP_HOST'] . '/market-update.php' . $query);
  exit;
}


/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */
define('WP_USE_THEMES', true);

/** Loads the WordPress Environment and Template */
require( dirname( __FILE__ ) . '/wp/wp-blog-header.php' );
