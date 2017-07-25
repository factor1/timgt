<?php
/**
 *
 * This uses the WufooCurl object to post values ($_POST) to a Wuffo form.  The account's subdomain and API key must be set using the
 * appropriate constants in wufoo.config.php and the form to be posted to must be indicated using the GET var 'hash'.
 * e.g., wufoo.php?hash=m7x3q1 will post to the form whose hash is m7x3q1
 *
 */

require_once('wufoo/WufooCurl.php');
require_once('wufoo/wufoo.config.php');

if(isset($_GET['hash'])) {
  try {

    $curl = new WufooCurl;
    echo $curl->postAuthenticated($_POST, 'https://' . WUFOO_SUBDOMAIN . '.wufoo.com/api/v3/forms/' . $_GET['hash'] . '/entries.xml', WUFOO_API_KEY);

  } catch( Exception $ef ) {
    print_r($ef);
  }
} else {
  echo 'Oops...no form hash given';
}
