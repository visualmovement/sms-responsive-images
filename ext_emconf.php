<?php
$EM_CONF[$_EXTKEY] = [
    'title' => 'SMS Responsive Images',
    'description' => 'Provides ViewHelpers and configuration to render valid responsive images based on TYPO3\'s image cropping tool.',
    'category' => 'fe',
    'author' => 'Simon Praetorius',
    'author_email' => 'praetorius@sitegeist.de',
    'author_company' => 'sitegeist media solutions GmbH',
    'state' => 'stable',
    'uploadfolder' => false,
    'clearCacheOnLoad' => false,
    'version' => '',
    'constraints' => [
        'depends' => [
            'typo3' => '10.4.0-14.99.99',
        ],
        'conflicts' => [
        ],
        'suggests' => [
            'fluid_styled_content' => ''
        ],
    ],
    'autoload' => [
        'psr-4' => [
            'Sitegeist\\ResponsiveImages\\' => 'Classes'
        ]
    ],
];
