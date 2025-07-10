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
    'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcardmultiplelinks'],
    'types' => ['content'],
    'contentCategory' => 'miscellaneous',
    'standardFields' => ['cssID'],
    'fields' => [
        'image_legend' => [
            'label' => [&$GLOBALS['TL_LANG']['tl_content']['image_legend']],
            'inputType' => 'group',
        ],
        'singleSRC' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'alt' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'clr w100 long'],
        ],
        'size' => [
            'inputType' => 'standardField',
        ],
        'image_css' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['image_css'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'image_displaymode' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_content']['image_displaymode'],
            'inputType' => 'select',
            'options' => array(
                'fit--cover'    => &$GLOBALS['TL_LANG']['tl_content']['image_displaymode']['cover'],
                'fit--contain'  => &$GLOBALS['TL_LANG']['tl_content']['image_displaymode']['contain'],
                'fit--natural'  => &$GLOBALS['TL_LANG']['tl_content']['image_displaymode']['natural'],
            ),
            'default' => 'fit--cover',
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_ratio' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_content']['image_ratio'],
            'inputType' => 'select',
            'options' => array(
                '' => 'Original',
                'r_16-9' => '16:9',
                'r_4-3'  => '4:3',
                'r_2-1'  => '2:1',
                'r_1-1'  => '1:1',
                'r_1-2'  => '1:2',
            ),
            'dependsOn' => array(
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'image_align_horizontal' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_content']['image_align_horizontal'],
            'inputType' => 'select',
            'options' => array(
                'img--left'   => &$GLOBALS['TL_LANG']['tl_content']['alignment']['left'],
                'img--center' => &$GLOBALS['TL_LANG']['tl_content']['alignment']['center'],
                'img--right'  => &$GLOBALS['TL_LANG']['tl_content']['alignment']['right'],
            ),
            'default' =>  'img--center',
            'dependsOn' => array(
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50 clr'),
        ),
        'image_align_vertical' => array(
            'label' => &$GLOBALS['TL_LANG']['tl_content']['image_align_vertical'],
            'inputType' => 'select',
            'options' => array(
                'img--top'    => &$GLOBALS['TL_LANG']['tl_content']['alignment']['top'],
                'img--center'       => &$GLOBALS['TL_LANG']['tl_content']['alignment']['center'],
                'img--bottom' => &$GLOBALS['TL_LANG']['tl_content']['alignment']['bottom'],
            ),
            'default' =>  'img--center',
            'dependsOn' => array(
                'field' => 'image_displaymode', 
                'value' => array('fit--cover','fit--contain'),
            ),
            'eval' => array('tl_class'=>'w50'),
        ),
        'content_legend' => [
            'label' => [&$GLOBALS['TL_LANG']['tl_content']['content_legend']],
            'inputType' => 'group',
        ],
        'headline' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['headline'], 'inputType' => 'standardField', 'eval' => ['tl_class' => 'w50', 'mandatory' => false, 'allowHtml' => true, 'includeBlankOption' => true],
        ],
        'title_css' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['title_css'], 'inputType' => 'text', 'eval' => ['tl_class' => 'w50', 'mandatory' => false],
        ],
        'text' => [
            'inputType' => 'standardField',
            'eval' => ['tl_class' => 'clr', 'mandatory' => false],
        ],
        'text_css' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['text_css'], 'inputType' => 'text', 'eval' => ['tl_class' => 'long ', 'mandatory' => false],
        ],
        'links' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['link_legend'],
            'elementLabel' => &$GLOBALS['TL_LANG']['tl_content']['link_legend'],
            'inputType' => 'list',
            'fields' => [
                'link_url' => [
                    'label' => &$GLOBALS['TL_LANG']['MSC']['url'], 
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50', 'mandatory' => false],
                ],
                'link_target' => [
                    'label' => &$GLOBALS['TL_LANG']['MSC']['target'], 
                    'inputType' => 'checkbox', 
                    'eval' => ['tl_class' => 'w50 m12'],
                ],
                'link_text' => [
                    'label' => &$GLOBALS['TL_LANG']['tl_content']['linkTitle'], 
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50', 'allowHtml' => true],
                ],
                'link_title' => [
                    'label' => &$GLOBALS['TL_LANG']['tl_content']['titleText'], 
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50', 'allowHtml' => true],
                ],
                'link_css' => [
                    'label' => &$GLOBALS['TL_LANG']['tl_content']['cssID'],
                    'inputType' => 'text',
                    'eval' => ['tl_class' => 'w50 ', 'mandatory' => false],
                ],
            ]
        ],
        'advanced_legend' => [
            'label' => [&$GLOBALS['TL_LANG']['tl_content']['advanced_legend']],
            'inputType' => 'group',
        ],
        'content_order' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['content_order'],
            'inputType' => 'select',
            'options' => [
                'img_first' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['content_order']['optionImg_first'],
                'txt_first' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['content_order']['optionTxt_first'],
            ],
            'eval' => ['tl_class' => 'clr w50'],
        ],
        'addRadius' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['addRadius'],
            'inputType' => 'checkbox',
            'eval' => ['tl_class' => 'clr m12'],
        ],
        'preset' => [
            'label' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['preset'],
            'inputType' => 'select',
            'options' => [
                'light' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['preset']['optionLight'],
                'thumbnail' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['preset']['optionThumbnail'],
                'inline' => &$GLOBALS['TL_LANG']['tl_content']['rsce_blockcard']['preset']['optionInline'],
            ],
            'eval' => ['tl_class' => 'w50 clr', 'includeBlankOption' => true],
        ],
    ],
];
