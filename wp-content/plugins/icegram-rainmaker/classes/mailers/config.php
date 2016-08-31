<?php
//Load Mailchimp

require_once('mailchimp.php');
    $active_plugins = (array) get_option('active_plugins', array());
    if (is_multisite()) {
            $active_plugins = array_merge($active_plugins, get_site_option('active_sitewide_plugins', array()));
    }
    if (!( in_array('email-subscribers/email-subscribers.php', $active_plugins) || array_key_exists('email-subscribers/email-subscribers.php', $active_plugins) )) {
            return;
    }
require_once('email-subscribers.php');
