<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   dse-grid
 * @author    Markus Häfner <markus@361.de>
 * @link      https://361.de
 * @license   GNU
 * @copyright 361 Grad Digital GmbH
 */

/**
 * Add palettes to tl_article
 */
$GLOBALS['TL_DCA']['tl_article']['palettes']['default'] = str_replace('cssID;','cssID;{visibility_legend:hide},article_hidden,article_visible;{article_settings_legend:hide},article_width,article_padding_top_bottom,article_padding_top_bottom_width,article_padding_right_left,article_padding_right_left_width;{article_elements_setting_legend:hide},article_elements_no_gutters,article_elements_vertical_alignment,article_elements_vertical_alignment_width,article_elements_horizontal_alignment,article_elements_horizontal_alignment_width;', $GLOBALS['TL_DCA']['tl_article']['palettes']['default']);

/**
 * Add fields to tl_article
 */
// VISIBILITY
$GLOBALS['TL_DCA']['tl_article']['fields']['article_hidden'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['article_hidden'],
    'inputType' => 'select',
    'options'   => array(
        'd-none',
        'd-sm-none',
        'd-md-none',
        'd-lg-none',
        'd-xl-none'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_hide_options'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 500,
        'tl_class' => 'w50',
        'multiple' => true,
        'chosen' => true
    ),
    'sql'       => "varchar(500) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_visible'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['article_visible'],
    'inputType' => 'select',
    'options'   => array(
        'd-block',
        'd-sm-block',
        'd-md-block',
        'd-lg-block',
        'd-xl-block'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_visible_options'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 500,
        'tl_class' => 'w50',
        'multiple' => true,
        'chosen' => true
    ),
    'sql'       => "varchar(500) NOT NULL default ''"
);

// ARTICLE WIDTH
$GLOBALS['TL_DCA']['tl_article']['fields']['article_width'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_width'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'container-fluid'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_width_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);

// ARTICLE PADDING
$GLOBALS['TL_DCA']['tl_article']['fields']['article_padding_top_bottom'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_top_bottom'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'py-0',
        'py-1',
        'py-2',
        'py-3',
        'py-4',
        'py-5'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_top_bottom_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_padding_top_bottom_width'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_top_bottom_width'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'sm',
        'md',
        'lg',
        'xl'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_top_bottom_width_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_padding_right_left'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_right_left'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'px-0',
        'px-1',
        'px-2',
        'px-3',
        'px-4',
        'px-5'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_right_left_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_padding_right_left_width'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_right_left_width'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'sm',
        'md',
        'lg',
        'xl'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_padding_right_left_width_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);

// ARTICLE-ELEMENTS
$GLOBALS['TL_DCA']['tl_article']['fields']['article_elements_no_gutters'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_no_gutters'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'no-gutters'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_no_gutters_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_elements_vertical_alignment'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_vertical_alignment'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'align-items-start',
        'align-items-center',
        'align-items-end'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_vertical_alignment_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_elements_vertical_alignment_width'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['article_elements_vertical_alignment_width'],
    'inputType' => 'select',
    'options'   => array(
        'sm',
        'md',
        'lg',
        'xl'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_vertical_alignment_width_options'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_article']['fields']['article_elements_horizontal_alignment'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_horizontal_alignment'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'justify-content-start',
        'justify-content-center',
        'justify-content-end',
        'justify-content-around',
        'justify-content-between'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_horizontal_alignment_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(255) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_article']['fields']['article_elements_horizontal_alignment_width'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_article']['article_elements_horizontal_alignment_width'],
    'inputType' => 'select',
    'options'   => array(
        'sm',
        'md',
        'lg',
        'xl'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_article']['article_elements_horizontal_alignment_width_options'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(255) NOT NULL default ''"
);