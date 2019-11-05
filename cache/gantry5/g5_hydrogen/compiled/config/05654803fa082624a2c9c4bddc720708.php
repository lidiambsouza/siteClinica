<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1549217324,
    'checksum' => 'f27893ae2abeaaff109441e819dcf25b',
    'files' => [
        'templates/g5_hydrogen/custom/config/17' => [
            'assignments' => [
                'file' => 'templates/g5_hydrogen/custom/config/17/assignments.yaml',
                'modified' => 1549217290
            ],
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/17/index.yaml',
                'modified' => 1549217290
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/17/layout.yaml',
                'modified' => 1549217290
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/17/styles.yaml',
                'modified' => 1549217290
            ]
        ],
        'templates/g5_hydrogen/custom/config/default' => [
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/index.yaml',
                'modified' => 1548801251
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/layout.yaml',
                'modified' => 1548801251
            ],
            'page/assets' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/assets.yaml',
                'modified' => 1549207532
            ],
            'page/body' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/body.yaml',
                'modified' => 1549207532
            ],
            'page/head' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/page/head.yaml',
                'modified' => 1549207532
            ],
            'particles/branding' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/branding.yaml',
                'modified' => 1549209552
            ],
            'particles/content' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/content.yaml',
                'modified' => 1549209552
            ],
            'particles/contentarray' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/contentarray.yaml',
                'modified' => 1549209552
            ],
            'particles/copyright' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/copyright.yaml',
                'modified' => 1549209552
            ],
            'particles/custom' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/custom.yaml',
                'modified' => 1549209552
            ],
            'particles/date' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/date.yaml',
                'modified' => 1549209552
            ],
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/logo.yaml',
                'modified' => 1549209552
            ],
            'particles/menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/menu.yaml',
                'modified' => 1549209552
            ],
            'particles/messages' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/messages.yaml',
                'modified' => 1549209552
            ],
            'particles/mobile-menu' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/mobile-menu.yaml',
                'modified' => 1549209552
            ],
            'particles/module' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/module.yaml',
                'modified' => 1549209552
            ],
            'particles/position' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/position.yaml',
                'modified' => 1549209552
            ],
            'particles/sample' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/sample.yaml',
                'modified' => 1549209552
            ],
            'particles/social' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/social.yaml',
                'modified' => 1549209552
            ],
            'particles/spacer' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/spacer.yaml',
                'modified' => 1549209552
            ],
            'particles/totop' => [
                'file' => 'templates/g5_hydrogen/custom/config/default/particles/totop.yaml',
                'modified' => 1549209552
            ]
        ],
        'templates/g5_hydrogen/config/default' => [
            'particles/logo' => [
                'file' => 'templates/g5_hydrogen/config/default/particles/logo.yaml',
                'modified' => 1548801250
            ]
        ]
    ],
    'data' => [
        'particles' => [
            'sample' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'branding' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '0',
                'content' => 'Powered by <a href="http://www.gantry.org/" title="Gantry Framework" class="g-powered-by">Gantry Framework</a>',
                'css' => [
                    'class' => 'branding'
                ]
            ],
            'copyright' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'date' => [
                    'start' => 'now',
                    'end' => 'now'
                ],
                'owner' => 'Desenvolvido by Lídia Beirão'
            ],
            'custom' => [
                'caching' => [
                    'type' => 'config_matches',
                    'values' => [
                        'twig' => '0',
                        'filter' => '0'
                    ]
                ],
                'enabled' => '1',
                'twig' => '0',
                'filter' => '0'
            ],
            'logo' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'target' => '_self',
                'link' => '1',
                'url' => '',
                'image' => 'gantry-media://Logo - SF.png',
                'text' => 'Gantry 5',
                'class' => 'gantry-logo',
                'svg' => ''
            ],
            'menu' => [
                'caching' => [
                    'type' => 'menu'
                ],
                'enabled' => '1',
                'menu' => '',
                'base' => '/',
                'startLevel' => '1',
                'maxLevels' => '0',
                'renderTitles' => '0',
                'hoverExpand' => '1',
                'mobileTarget' => '0',
                'forceTarget' => '0'
            ],
            'mobile-menu' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'social' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '0',
                'css' => [
                    'class' => 'social'
                ],
                'target' => '_blank',
                'display' => 'both',
                'title' => '',
                'items' => [
                    
                ]
            ],
            'spacer' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1'
            ],
            'totop' => [
                'caching' => [
                    'type' => 'static'
                ],
                'enabled' => '1',
                'css' => [
                    'class' => 'totop'
                ],
                'icon' => '',
                'content' => ''
            ],
            'analytics' => [
                'enabled' => true,
                'ua' => [
                    'anonym' => false,
                    'ssl' => false,
                    'debug' => false
                ]
            ],
            'assets' => [
                'enabled' => true
            ],
            'content' => [
                'enabled' => '1'
            ],
            'contentarray' => [
                'enabled' => '1',
                'article' => [
                    'filter' => [
                        'featured' => ''
                    ],
                    'limit' => [
                        'total' => 2,
                        'columns' => 2,
                        'start' => 0
                    ],
                    'display' => [
                        'pagination_buttons' => '',
                        'image' => [
                            'enabled' => 'intro'
                        ],
                        'text' => [
                            'type' => 'intro',
                            'limit' => '',
                            'formatting' => 'text',
                            'prepare' => '0'
                        ],
                        'title' => [
                            'enabled' => 'show',
                            'limit' => ''
                        ],
                        'date' => [
                            'enabled' => 'published',
                            'format' => 'l, F d, Y'
                        ],
                        'read_more' => [
                            'enabled' => 'show',
                            'label' => '',
                            'css' => ''
                        ],
                        'author' => [
                            'enabled' => 'show'
                        ],
                        'category' => [
                            'enabled' => 'link'
                        ],
                        'hits' => [
                            'enabled' => 'show'
                        ]
                    ],
                    'sort' => [
                        'orderby' => 'publish_up',
                        'ordering' => 'ASC'
                    ]
                ],
                'css' => [
                    'class' => ''
                ],
                'extra' => [
                    
                ]
            ],
            'date' => [
                'enabled' => '0',
                'css' => [
                    'class' => 'date'
                ],
                'date' => [
                    'formats' => 'l, F d, Y'
                ]
            ],
            'frameworks' => [
                'enabled' => true,
                'jquery' => [
                    'enabled' => 0,
                    'ui_core' => 0,
                    'ui_sortable' => 0
                ],
                'bootstrap' => [
                    'enabled' => 0
                ],
                'mootools' => [
                    'enabled' => 0,
                    'more' => 0
                ]
            ],
            'lightcase' => [
                'enabled' => true
            ],
            'messages' => [
                'enabled' => '1'
            ],
            'module' => [
                'enabled' => '1',
                'chrome' => ''
            ],
            'position' => [
                'enabled' => '1',
                'chrome' => ''
            ]
        ],
        'page' => [
            'doctype' => 'html',
            'body' => [
                'class' => 'gantry',
                'attribs' => [
                    'class' => 'gantry',
                    'id' => '',
                    'extra' => [
                        
                    ]
                ],
                'layout' => [
                    'sections' => '0'
                ],
                'body_top' => '',
                'body_bottom' => ''
            ],
            'assets' => [
                'favicon' => 'gantry-media://Logo - SF.png',
                'touchicon' => '',
                'css' => [
                    
                ],
                'javascript' => [
                    
                ]
            ],
            'head' => [
                'meta' => [
                    
                ],
                'head_bottom' => '',
                'atoms' => [
                    
                ]
            ]
        ],
        'styles' => [
            'accent' => [
                'color-1' => '#558b2f',
                'color-2' => '#8bc34a'
            ],
            'base' => [
                'background' => '#ffffff',
                'text-color' => '#666666',
                'body-font' => 'roboto, sans-serif',
                'heading-font' => 'roboto, sans-serif'
            ],
            'breakpoints' => [
                'large-desktop-container' => '75rem',
                'desktop-container' => '60rem',
                'tablet-container' => '48rem',
                'large-mobile-container' => '30rem',
                'mobile-menu-breakpoint' => '48rem'
            ],
            'feature' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'footer' => [
                'background' => '#7fc76d',
                'text-color' => '#666666'
            ],
            'header' => [
                'background' => '#3c7216',
                'text-color' => '#ffffff'
            ],
            'main' => [
                'background' => '#ffffff',
                'text-color' => '#666666'
            ],
            'menu' => [
                'col-width' => '180px',
                'animation' => 'g-fade'
            ],
            'navigation' => [
                'background' => '#b4e37f',
                'text-color' => '#ffffff',
                'overlay' => 'rgba(0, 0, 0, 0.4)'
            ],
            'offcanvas' => [
                'background' => '#344e2c',
                'text-color' => '#ffffff',
                'width' => '17rem',
                'toggle-color' => '#ffffff',
                'toggle-visibility' => 1
            ],
            'showcase' => [
                'background' => '#354d59',
                'image' => '',
                'text-color' => '#3c7216'
            ],
            'subfeature' => [
                'background' => '#f0f0f0',
                'text-color' => '#666666'
            ],
            'preset' => 'preset3'
        ],
        'index' => [
            'name' => '17',
            'timestamp' => 1549217290,
            'version' => 7,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1548801250
            ],
            'positions' => [
                
            ],
            'sections' => [
                'header' => 'Header',
                'navigation' => 'Navigation',
                'showcase' => 'Showcase',
                'feature' => 'Feature',
                'subfeature' => 'Subfeature',
                'main' => 'Main',
                'footer' => 'Footer',
                'offcanvas' => 'Offcanvas'
            ],
            'particles' => [
                'menu' => [
                    'menu-9366' => 'Menu'
                ],
                'logo' => [
                    'logo-2447' => 'Logo / Image',
                    'logo-3795' => 'Logo / Image'
                ],
                'messages' => [
                    'system-messages-8865' => 'System Messages'
                ],
                'content' => [
                    'system-content-8263' => 'Page Content'
                ],
                'copyright' => [
                    'copyright-1949' => 'Copyright'
                ],
                'totop' => [
                    'totop-3080' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-2657' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                14 => [
                    'header' => 'header',
                    'navigation' => 'navigation',
                    'showcase' => 'showcase',
                    'feature' => 'feature',
                    'main' => 'main',
                    'subfeature' => 'subfeature',
                    'footer' => 'footer',
                    'offcanvas' => 'offcanvas',
                    'menu-9366' => 'menu-5752',
                    'logo-2447' => 'logo-4978',
                    'system-messages-8865' => 'system-messages-4909',
                    'system-content-8263' => 'system-content-1528',
                    'logo-3795' => 'logo-1918',
                    'copyright-1949' => 'copyright-8156',
                    'totop-3080' => 'totop-9861',
                    'mobile-menu-2657' => 'mobile-menu-6065'
                ]
            ]
        ],
        'layout' => [
            'version' => 2,
            'preset' => [
                'image' => 'gantry-admin://images/layouts/home.png',
                'name' => 'home',
                'timestamp' => 1548801250
            ],
            'layout' => [
                'header' => [
                    
                ],
                'navigation' => [
                    
                ],
                'showcase' => [
                    
                ],
                'feature' => [
                    
                ],
                'main' => [
                    
                ],
                'subfeature' => [
                    
                ],
                'footer' => [
                    
                ],
                'offcanvas' => [
                    
                ]
            ],
            'structure' => [
                'header' => [
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'main' => [
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'footer' => [
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ],
                'offcanvas' => [
                    'inherit' => [
                        'outline' => '14',
                        'include' => [
                            0 => 'attributes',
                            1 => 'block',
                            2 => 'children'
                        ]
                    ]
                ]
            ],
            'content' => [
                'position-header' => [
                    'attributes' => [
                        'key' => 'header'
                    ]
                ],
                'position-breadcrumbs' => [
                    'attributes' => [
                        'key' => 'breadcrumbs'
                    ]
                ],
                'position-footer' => [
                    'attributes' => [
                        'key' => 'footer'
                    ]
                ]
            ]
        ],
        'assignments' => [
            'menu' => [
                
            ],
            'style' => [
                
            ]
        ]
    ]
];
