<?php

if (!defined('WHMCS')) {
  die('This file cannot be accessed directly');
}

use Illuminate\Database\Capsule\Manager as Capsule;

// run this code on every client area page
add_hook("ClientAreaFooterOutput", 1, function ($vars) {
  $buttonClass = "";

  $data = Capsule::table('tbladdonmodules')
    ->select('value AS button_class')
    ->where('setting', '=', 'button_class')
    ->where('module', '=', 'chatbutton')
    ->first();

  if ($data) {
    $buttonClass = $data->button_class;
  }

  $output = "<script>
    window.onload = function() {
      var anchors = document.getElementsByTagName('a');
      for(var i = 0; i < anchors.length; i++) {
        var anchor = anchors[i];
        if(anchor.className.match(/\b".$buttonClass."\b/)) {
          anchor.onclick = function() {
            Intercom('show');
          }
        }
      }
    }
  </script>";

  return $output;
});
