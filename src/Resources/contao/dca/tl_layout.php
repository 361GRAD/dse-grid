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
 * Add palettes to tl_layout
 */
$GLOBALS['TL_DCA']['tl_layout']['palettes']['default'] = str_replace(
//    'cols;','cols;{activate_legend},activateCArticles;{grid_legend},gridSM,gridMD,gridLG,gridXL;{width_legend},widthSM,widthMD,widthLG,widthXL;{padding_legend},paddingTopSM,paddingBottomSM,paddingTopMD,paddingBottomMD,paddingTopLG,paddingBottomLG,paddingTopXL,paddingBottomXL;',
    'name;','name;{activate_legend:hide},activateCArticles;',
    $GLOBALS['TL_DCA']['tl_layout']['palettes']['default']
);

/**
 * Add fields to tl_layout
 */
// ACTIVATE
$GLOBALS['TL_DCA']['tl_layout']['fields']['activateCArticles'] = array (
'label'     => &$GLOBALS['TL_LANG']['tl_layout']['activateCArticles'],
    'exclude'       => true,
    'inputType'     => 'checkbox',
    'eval'          => array(
        'tl_class' => 'w50 clr'
    ),
    'sql'           => "char(1) NOT NULL default '0'",
//    'save_callback' => array(
//        array('Dse\\ElementsBundle\\DseArticlesExtension\\Resources\\contao\\classes\\SCSSGenerator', 'create_scss'),
//    ),
);

// GRID
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['gridXL'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['gridXL'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

// WIDTH
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['widthXL'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['widthXL'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

// SM-PADDING
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingTopSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingTopSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingBottomSM'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingBottomSM'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

// MD-PADDING
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingTopMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingTopMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingBottomMD'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingBottomMD'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

// LG-PADDING
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingTopLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingTopLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingBottomLG'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingBottomLG'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);

// XL-PADDING
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingTopXL'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingTopXL'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_layout']['fields']['paddingBottomXL'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_layout']['paddingBottomXL'],
    'inputType' => 'inputUnit',
    'options'   => $GLOBALS['TL_CSS_UNITS'],
    'eval'      => array(
        'includeBlankOption' => true,
        'rgxp' => 'natural',
        'maxlength' => 20,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(64) NOT NULL default ''"
);
