<?php

if (!defined('WHMCS'))
    die('This file cannot be accessed directly');

function chatbutton_config()
{
  $configarray = array(
    'name'          => 'Chat Button',
    'description'   => 'A simple module to enable the chat button in the client area to work with Intercom.',
    'version'       => '1.0',
    'author'        => 'Jake Walker',
    'fields'        => array(
      'button_class' => array(
        'FriendlyName'  => 'Element Class to Match',
        'Type'          => 'text',
        'Size'          => '64',
        'Description'   => 'Which class should the plugin listen for?',
        'Default'       => 'chat-button'
      )
    )
  );

  return $configarray;
}

function chatbutton_activate()
{
  return array(
    'status'        => 'success',
    'description'   => 'Chat Button module activated!'
  );
}

function chatbutton_deactivate()
{
  return array(
    'status'        => 'success',
    'description'   => 'Chat Button module deactivated.'
  );
}

function chatbutton_upgrade($vars)
{
  // No upgrade path yet.
}

function chatbutton_output($vars)
{
  // n/a
}

function chatbutton_sidebar($vars)
{
  // n/a
}
