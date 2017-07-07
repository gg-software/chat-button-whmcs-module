<?php

if (!defined('WHMCS')) {
  die('This file cannot be accessed directly');
}

// run this code on every client area page
add_hook("ClientAreaFooterOutput", 1, function ($vars) {
  $output = "<script>
    if(!window.jQuery) {
      var script = document.createElement('script');
      script.type = 'text/javascript';
      script.src = 'https://code.jquery.com/jquery-3.2.1.min.js';
      document.getElementsByTagName('head')[0].appendChild(script);
    }
  </script>"; // load jquery if it isn't already

  $output = "<script>
    $('.chat-button').click(function() {
      Intercom('show');
    });
  </script>";

  return $output;
});
