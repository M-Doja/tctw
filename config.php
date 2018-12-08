<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Center Of The World',
        'nav_menu' => [
            '' => 'Home',
            'about-us' => 'About Us',
        ],
        'template_path' => 'template',
        'content_path' => 'content/views',
        'pretty_uri' => true,
        'version' => 'v3.0.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}
