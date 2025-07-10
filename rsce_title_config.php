<?php

declare(strict_types=1);

/**
 * SMARTGEAR for Contao Open Source CMS
 * Copyright (c) 2015-2022 Web ex Machina
 *
 * @category ContaoBundle
 * @package  Web-Ex-Machina/contao-smartgear
 * @author   Web ex Machina <contact@webexmachina.fr>
 * @link     https://github.com/Web-Ex-Machina/contao-smartgear/
 */

return [
    'label' => ['Titre custom','Ajoutez un titre customisé'],
    'contentCategory' => 'texts',
    'standardFields' => ['cssID'/*,'headline'*/],
    'fields' => [
        'headline' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['headline'],
            'inputType' => 'inputUnit',
            'options' => [
                'h1' => 'H1',
                'h2' => 'H2',
                'h3' => 'H3',
                'h4' => 'H4',
                'h5' => 'H5',
                'h6' => 'H6',
            ],
            'eval' => ['tl_class' => 'w50 clr', 'mandatory' => true, 'includeBlankOption' => true, 'allowHtml' => true],
        ],
        'title_modifier' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['title_modifier'],
            'inputType' => 'select',
            'options_callback' => function(){return [
                // 'title--underline' => '1er caractère souligné',
                // 'title--sep'       => 'Separation',
                // 'title--compound'  => 'Composite',
            ];},
            'eval' => ['tl_class' => 'w50', 'mandatory' => false, 'includeBlankOption' => true],
        ],
        'subtitle' => [
            'label' => ['Sous-titre',''],
            'inputType' => 'text',
            'dependsOn' => array(
                'field' => 'title_modifier', 
                'value' => 'title--compound',      
            ),
            'eval' => ['tl_class' => 'w50 clr', 'mandatory' => false, 'allowHtml' => true],
        ],
        'addText' => [
            'label' => ['Ajouter un texte',''],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'clr'],
        ],
        'text' => [
            'inputType' => 'standardField',
            'eval' => ['mandatory' => false, 'tl_class' => 'clr'],
            'dependsOn' => array(
                'field' => 'addText', 
                // 'value' => 'addText',      
            ),
        ],
        'subtitle_color' => [
            'label' => ['Couleur sous-titre',''],
            'inputType' => 'select',
            'options' => [
                "primary"=>"Primaire"
                ,"secondary"=>"Secondaire"
                ,"success"=>"Succès"
                ,"error"=>"Erreur"
                ,"warning"=>"Avertissement"
                ,"grey"=>"grey"
                ,"black"=>"black"
                ,"blacklight"=>"blacklight"
                ,"blacklighter"=>"blacklighter"
                ,"greystronger"=>"greystronger"
                ,"greystrong"=>"greystrong"
                ,"greylight"=>"greylight"
                ,"greylighter"=>"greylighter"
                ,"white"=>"white"
                ,"none"=> "none"
            ],
            'dependsOn' => array(
                'field' => 'title_modifier', 
                'value' => 'title--compound',      
            ),
            'eval' => ['tl_class' => 'w50 clr', 'mandatory' => false, 'includeBlankOption' => true],
        ],
        'subtitle_classes' => [
            'label' => ['Classes CSS supplémentaires','Classes CSS à ajouter au sous-titre (facultatif)'],
            'inputType' => 'text',
            'dependsOn' => array(
                'field' => 'title_modifier', 
                'value' => 'title--compound',      
            ),
            'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'underline_color' => [
            'label' => ['Couleur',''],
            'inputType' => 'select',
            'options' => [
                "primary"=>"Primaire"
                ,"secondary"=>"Secondaire"
                ,"success"=>"Succès"
                ,"error"=>"Erreur"
                ,"warning"=>"Avertissement"
                ,"grey"=>"grey"
                ,"black"=>"black"
                ,"blacklight"=>"blacklight"
                ,"blacklighter"=>"blacklighter"
                ,"greystronger"=>"greystronger"
                ,"greystrong"=>"greystrong"
                ,"greylight"=>"greylight"
                ,"greylighter"=>"greylighter"
                ,"white"=>"white"
                ,"none"=> "none"
            ],
            'dependsOn' => array(
                'field' => 'title_modifier', 
                'value' => 'title--underline',      
            ),
            'eval' => ['tl_class' => 'w50', 'mandatory' => false, 'includeBlankOption' => true],
        ]

    ],
];