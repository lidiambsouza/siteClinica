<?php
return [
    '_type' => 'Gantry\\Component\\Content\\Block\\HtmlBlock',
    '_version' => 1,
    'id' => '5c50fa4de50336.89157195',
    'content' => '<div id="owlcarousel-2455-particle" class="g-content g-particle">            <div class="">
        
        <div id="g-owlcarousel-owlcarousel-2455" class="g-owlcarousel owl-carousel has-color-overlay">

                                                <div class="g-owlcarousel-item ">
                        <div class="g-owlcarousel-item-wrapper">
                            <div class="g-owlcarousel-item-img">
                                <img src="/centromedico/templates/g5_helium/images/header/principal1.jpg?5c50eff7" alt="" />
                            </div>
                            <div class="g-owlcarousel-item-content-container">
                                <div class="g-owlcarousel-item-content-wrapper">
                                    <div class="g-owlcarousel-item-content">
                                                                                                                                                            </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
        </div>
    </div>
            </div>',
    'frameworks' => [
        'jquery' => 1
    ],
    'scripts' => [
        'footer' => [
            '6141350c8c57dcb9989585874f7e88d04feed8415e56f557592544657c34ed9e7a02e042' => [
                ':type' => 'file',
                ':priority' => 0,
                'src' => '/centromedico/templates/g5_helium/js/owl.carousel.min.js?5c50d4c1',
                'type' => 'text/javascript',
                'defer' => false,
                'async' => false,
                'handle' => ''
            ],
            '9c00b0ac56fc22f19de3518aed538de8c591913611193584ef81c1f8569f69225bb21d0a' => [
                ':type' => 'inline',
                ':priority' => 0,
                'content' => '
        jQuery(document).ready(function () {
            jQuery(\'#g-owlcarousel-owlcarousel-2455\').owlCarousel({
                items: 1,
                rtl: false,
                loop: true,
                                nav: false,
                                                dots: true,
                                                autoplay: false,
                            })
        });
    ',
                'type' => 'text/javascript'
            ]
        ]
    ]
];
