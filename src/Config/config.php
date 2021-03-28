<?php

return [
    /**
     * Assets
     * Set your assets URL
     */
    'assets' => [
        'css' => [
            '/css/app.css',
        ],
        'js' => [
            'main' => [
                'url' => '/js/app.js',
                'defer' => true
            ],
        ],
    ],

    'show_profile' => true,
    
    'menu' => [
        'top' => [
            'left' => [
                [
                    'text' => 'Home',
                    'route' => 'home'
                ],
            ],
            'right' => [
                
            ],
        ],
        /**
         * Use SVG as icons
         */
        'side' => [
            [
                'text' => 'Dashboard',
                'route' => 'admin.index',
                'icon' => '
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>
                ',
            ],
            [
                'text' => 'Products',
                'route' => 'admin.product.index',
                'icon' => '
                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                </svg>
                '
            ],
        ],
    ],

    'livewire' => (bool) true,
];