<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/mcrittenden/Dropbox/Code/artisan-wood-and-iron/user/config/site.yaml',
    'modified' => 1491849696,
    'data' => [
        'title' => 'Gateway',
        'author' => [
            'name' => 'John Appleseed',
            'email' => 'john@email.com',
            'copyright' => 'Copyright 2013 Gateway. All Rights Reserved.'
        ],
        'logo' => 'logo.png',
        'header' => [
            'title' => 'The City &amp; the Wild',
            'description' => 'Gateway has elegant style perfectly suited for a variety of users; writers, businesses or personal sites. Design is everywhere... even under the hood with rock solid development.',
            'background' => 'background.jpg',
            'buttons' => [
                0 => [
                    'text' => 'Explore More',
                    'url' => '#',
                    'class' => 'button radius'
                ]
            ]
        ],
        'social' => [
            0 => [
                'url' => 'https://twitter.com/getgrav',
                'icon' => 'twitter'
            ],
            1 => [
                'url' => '#',
                'icon' => 'facebook'
            ],
            2 => [
                'url' => 'http://www.vimeo.com',
                'icon' => 'vimeo-square'
            ],
            3 => [
                'url' => 'http://www.pinterest.com',
                'icon' => 'pinterest'
            ]
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag',
            2 => 'featured'
        ],
        'blog' => [
            'route' => '/blog'
        ],
        'metadata' => [
            'description' => 'My Gateway Site'
        ],
        'summary' => [
            'size' => 300
        ],
        'routes' => [
            '/something/else' => '/blog/sample-3',
            '/another/one/here' => '/blog/sample-3',
            '/new/*' => '/blog/*'
        ],
        'footer' => [
            'widget' => [
                'title' => 'About the Gateway Theme',
                'description' => 'Gateway incorporates elegant style with user friendly customizer options making it perfectly suited for a variety of WordPress users. It\'s sure to be a favorite for first time WordPress users and experienced developers alike.',
                'link' => NULL
            ]
        ],
        'copyright' => 'Copyright © 2015 <a href="http://rescuethemes.com/">Rescue Themes</a>. All Rights Reserved. Converted by <a href="http://www.getgrav.org">Grav Team</a>'
    ]
];
