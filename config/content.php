<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Site navigation links
    |--------------------------------------------------------------------------
    | Used in nav menus around the site
    */
    'nav'          =>
        [
            'home.index'    => [
                'label'   => 'Home',
                'display' => true,
            ],
            'about.index'   => [
                'label'   => 'About Me',
                'display' => true,
            ],
            'work.index'    => [
                'label'   => 'Work',
                'display' => true,
            ],
            'contact.index' => [
                'label'   => 'Contact Me',
                'display' => true,
            ],
        ],
    /*
    |--------------------------------------------------------------------------
    | Social media links
    |--------------------------------------------------------------------------
    | Icons can be "img" or "blade". SVGs are in include()d blade templates
    */
    'social'       =>
        [
            'linkedin' => [
                'url'  => 'https://www.linkedin.com/in/charles-anthony-edwards/',
                'icon' => [
                    'type' => 'blade',
                    'path' => 'svg.linkedin'
                ],
                'alt'  => 'LinkedIn'
            ],
            'twitter'  => [
                'url'  => 'https://twitter.com/CAEdwards82',
                'icon' => [
                    'type' => 'blade',
                    'path' => 'svg.twitter'
                ],
                'alt'  => 'Twitter'
            ],
            'github'   => [
                'url'  => 'https://github.com/charliebis',
                'icon' => [
                    'type' => 'blade',
                    'path' => 'svg.github'
                ],
                'alt'  => 'GitHub'
            ],
        ],
    /*
    |--------------------------------------------------------------------------
    | Testimonials displayed on site
    |--------------------------------------------------------------------------
    */
    'testimonials' => [
        [
            'name'       => 'Kathryn Wright',
            'position'   => 'C.E.O. - ASAP Discounts Ltd',
            'link_url'   => 'https://www.linkedin.com/in/kathrynannewright/',
            'avatar_url' => '/img/avatar/kwright.jpg',
            'text'       => 'Working with Charlie is always a pleasure. Charlie isn\'t just a developer. He takes into account the business and
                        its needs, and if I throw a problem at him, he\'ll dig into the who, what and why and think about the downstream impacts of what he\'s creating.'
        ],
        [
            'name'       => 'Simon McLaughlin',
            'position'   => 'Software Development Manager - Glide Utilities',
            'link_url'   => 'https://www.linkedin.com/in/simonmclaughlin/',
            'avatar_url' => 'https://www.gravatar.com/avatar/81e2b828cf3872085197bb03165508717dac6c4d5bf962ec9163578bdc6ced98',
            'text'       => 'Charlie is a great asset to any team. Having already worked with him a few years ago, I recently had the opportunity to recruit
                         him to my team. His expertise and professionalism brought exceptional results to our projects. I highly recommend!'
        ]
    ],

    /*
    |--------------------------------------------------------------------------
    | Stack logo links
    |--------------------------------------------------------------------------
    | Used in footer - Icons can be "img" or "blade". SVGs are in include()d blade templates
    */
    'stack'        =>
        [
            'laravel'  => [
                'url'  => 'https://laravel.com/',
                'icon' => [
                    'type' => 'img',
                    'path' => '/img/stack/laravel.png',
                    'width' => 100
                ],
                'alt'  => 'Laravel'
            ],
            'html5'  => [
                'url'  => 'https://dev.w3.org/html5/spec-LC/',
                'icon' => [
                    'type' => 'img',
                    'path' => '/img/stack/html5.png',
                    'width' => 100
                ],
                'alt'  => 'HTML5'
            ],
            'js'  => [
                'url'  => 'https://en.wikipedia.org/wiki/JavaScript',
                'icon' => [
                    'type' => 'img',
                    'path' => '/img/stack/js.png',
                    'width' => 100
                ],
                'alt'  => 'Vanilla JS'
            ],
            'tailwind' => [
                'url'  => 'https://tailwindcss.com/',
                'icon' => [
                    'type' => 'img',
                    'path' => '/img/stack/tailwind.png',
                    'width' => 100
                ],
                'alt'  => 'Tailwind CSS'
            ],
            'daisyui'  => [
                'url'  => 'https://daisyui.com/',
                'icon' => [
                    'type' => 'img',
                    'path' => '/img/stack/daisyui.png',
                    'width' => 100
                ],
                'alt'  => 'DaisyUI'
            ],
        ],

];
