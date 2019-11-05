<?php
return [
    '@class' => 'Gantry\\Component\\Config\\CompiledConfig',
    'timestamp' => 1549333164,
    'checksum' => '2989ec110ffdd7a5445bdd0be78ec798',
    'files' => [
        'templates/g5_hydrogen/custom/config/19' => [
            'assignments' => [
                'file' => 'templates/g5_hydrogen/custom/config/19/assignments.yaml',
                'modified' => 1549333084
            ],
            'index' => [
                'file' => 'templates/g5_hydrogen/custom/config/19/index.yaml',
                'modified' => 1549333131
            ],
            'layout' => [
                'file' => 'templates/g5_hydrogen/custom/config/19/layout.yaml',
                'modified' => 1549333131
            ],
            'styles' => [
                'file' => 'templates/g5_hydrogen/custom/config/19/styles.yaml',
                'modified' => 1549333068
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
                'text-color' => '#4b954b'
            ],
            'preset' => 'preset3'
        ],
        'index' => [
            'name' => '19',
            'timestamp' => 1549333131,
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
                    'menu-5752' => 'Menu'
                ],
                'logo' => [
                    'logo-4978' => 'Logo / Image',
                    'logo-1918' => 'Logo / Image'
                ],
                'messages' => [
                    'system-messages-4909' => 'System Messages'
                ],
                'sample' => [
                    'sample-3' => 'Key Features',
                    'sample-9188' => 'Key Features2',
                    'sample-9195' => 'Key Features3',
                    'sample-4687' => 'Key Features4'
                ],
                'copyright' => [
                    'copyright-8156' => 'Copyright'
                ],
                'totop' => [
                    'totop-9861' => 'To Top'
                ],
                'mobile-menu' => [
                    'mobile-menu-6065' => 'Mobile Menu'
                ]
            ],
            'inherit' => [
                
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
                '/header/' => [
                    
                ],
                '/navigation/' => [
                    0 => [
                        0 => 'menu-5752 85',
                        1 => 'logo-4978 15'
                    ]
                ],
                '/showcase/' => [
                    
                ],
                '/feature/' => [
                    
                ],
                '/main/' => [
                    0 => [
                        0 => 'system-messages-4909'
                    ]
                ],
                '/subfeature/' => [
                    0 => [
                        0 => 'sample-3'
                    ],
                    1 => [
                        0 => 'sample-9188'
                    ],
                    2 => [
                        0 => 'sample-9195'
                    ],
                    3 => [
                        0 => 'sample-4687'
                    ]
                ],
                '/footer/' => [
                    0 => [
                        0 => 'logo-1918 40',
                        1 => 'copyright-8156 45',
                        2 => 'totop-9861 15'
                    ]
                ],
                'offcanvas' => [
                    0 => [
                        0 => 'mobile-menu-6065'
                    ]
                ]
            ],
            'structure' => [
                'header' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'navigation' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => ''
                    ]
                ],
                'showcase' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => '',
                        'extra' => [
                            0 => [
                                'style' => 'background: url("/centromedico/templates/g5_hydrogen/custom/images/principal107.png?5c571323") no-repeat center; background-size: cover;'
                            ]
                        ]
                    ]
                ],
                'feature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'main' => [
                    'attributes' => [
                        'boxed' => ''
                    ]
                ],
                'subfeature' => [
                    'type' => 'section',
                    'attributes' => [
                        'boxed' => '',
                        'class' => 'flush',
                        'variations' => ''
                    ]
                ],
                'footer' => [
                    'attributes' => [
                        'boxed' => '',
                        'class' => '',
                        'variations' => '',
                        'extra' => [
                            0 => [
                                'style' => 'height: 80px;'
                            ]
                        ]
                    ]
                ]
            ],
            'content' => [
                'menu-5752' => [
                    'block' => [
                        'id' => 'lisia destes',
                        'class' => 'lidia teste'
                    ]
                ],
                'logo-4978' => [
                    'title' => 'Logo / Image',
                    'attributes' => [
                        'image' => 'gantry-media://Logo - SF.png'
                    ]
                ],
                'sample-3' => [
                    'title' => 'Key Features',
                    'attributes' => [
                        'image' => '',
                        'headline' => '',
                        'description' => '
		<div class="g-grid">
			<div class="g-block">
				<div class="g-content" style="
    padding: 0px;
    margin: 0px;
">
										<h1 style="
    color: #4b954b;
">ESPECIALIDADES</h1>					<div class="sample-description">		<div class="g-grid">
			<div class="g-block">
				<div class="g-content">
																								</div>
			</div>
		</div>
		<div class="g-grid">
							<div class="g-block  box2">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/cardio.jpg" style="width: 288px;height: 192px;">
						<h4>Cardiologia</h4>
						
						
					</div>
				</div>
							<div class="g-block  box4">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/dermato.jpg" style="width: 288px;height: 192px;">
						<h4>Dermatologia</h4>
						
						
					</div>
				</div>
							<div class="g-block  box2">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/psico.jpg" style="width: 288px;height: 192px;">
						<h4>Psicologia</h4>
						
					
					</div>
				</div>
					</div>
	</div>									</div>
			</div>
		</div>
		<div class="g-grid">
					</div>
	',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ],
                'sample-9188' => [
                    'title' => 'Key Features2',
                    'attributes' => [
                        'image' => '',
                        'headline' => '',
                        'description' => '
		<div class="g-grid">
							<div class="g-block  box4">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/nutri.jpg" style="width: 288px;height: 192px;">
						<h4>Nutricionista</h4>
						
						
					</div>
				</div>
							<div class="g-block  box2">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/otorrino.jpg" style="width: 288px;height: 192px;">
						<h4>Otorrinolaringologista</h4>
						

					</div>
				</div>
							<div class="g-block  box4">
					<div class="g-content">
						<img src="/centromedico/images/especialidade/gastro.jpg" style="width: 288px;height: 192px;">
						<h4>Gastrologista</h4>
						

					</div>
				</div>
					</div>
',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ],
                'sample-9195' => [
                    'title' => 'Key Features3',
                    'attributes' => [
                        'image' => '',
                        'headline' => '',
                        'description' => '
		<div class="g-grid">
							<div class="g-block  box2">
					<div class="g-content">
						<img src="images/especialidade/clinica.jpg" style="width: 288px;height: 192px;">
						<h4>Clínica Médica</h4>
						

					</div>
				</div>
							<div class="g-block  box4">
					<div class="g-content">
						<img src="images/especialidade/pedi.jpg" style="width: 288px;height: 192px;">
						<h4>Pediatria</h4>
						
						
					</div>
				</div>
							<div class="g-block  box2">
					<div class="g-content">
						<img src="images/especialidade/gineco.jpg" style="width: 288px;height: 192px;">
						<h4>Ginecologia</h4>
						
						
					</div>
				</div>
					</div>
	',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ],
                'sample-4687' => [
                    'title' => 'Key Features4',
                    'attributes' => [
                        'image' => '',
                        'headline' => '',
                        'description' => '
		<div class="g-grid">
    <div class="g-block"></div>
							<div class="g-block  box4">
					<div class="g-content">
						<img src="images/especialidade/urolo.jpg" style="width: 288px;height: 192px;">
						<h4>Urologista</h4>
						
						

					</div>
				</div>
    <div class="g-block"></div>
					</div>
	',
                        'link' => '',
                        'linktext' => '',
                        'samples' => [
                            
                        ]
                    ]
                ],
                'logo-1918' => [
                    'title' => 'Logo / Image'
                ],
                'copyright-8156' => [
                    'attributes' => [
                        'date' => [
                            'start' => 'now'
                        ],
                        'owner' => 'Desenvolvido by Lídia Beirão'
                    ]
                ],
                'totop-9861' => [
                    'title' => 'To Top',
                    'attributes' => [
                        'icon' => 'fa fa-arrow-circle-up fa-fw fa-lg',
                        'content' => 'Voltar'
                    ]
                ],
                'mobile-menu-6065' => [
                    'title' => 'Mobile Menu'
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
