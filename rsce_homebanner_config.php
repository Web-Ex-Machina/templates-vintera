<?php

declare(strict_types=1);

return [
    'label' => ['Home Bannière (Start)', 'Bannière (Home Hero)'],  
    'contentCategory' => 'banner', 
    'standardFields' => ['cssID'], 
    'fields' => [
        'content' => array(
            'label' => ['test'],
            'inputType' => 'select',
            'foreignKey' => "tl_ms_artist.title", // Will use `name` as label, and the user `id` as value
            'eval' => [
                'chosen' => true, // Adds a search box to filter the options
            ],
            'sql' => [
                'type' => 'string',
                'notnull' => false,
                'default' => '',
            ],
            'eval' => array('tl_class'=>'w50'),
        ),
    ],
];
