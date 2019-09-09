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
 * Add palettes to tl_content
 */
// GRID
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_xs'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_xs'],
    'inputType' => 'select',
    'options_callback'   => array('tl_content_grid', 'colArray'),
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(4) NOT NULL default '12'"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_sm'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_sm'],
    'inputType' => 'select',
    'options_callback'   => array('tl_content_grid', 'colArray'),
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_md'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_md'],
    'inputType' => 'select',
    'options_callback'   => array('tl_content_grid', 'colArray'),
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_lg'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_lg'],
    'inputType' => 'select',
    'options_callback'   => array('tl_content_grid', 'colArray'),
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(4) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_xl'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_xl'],
    'inputType' => 'select',
    'options_callback'   => array('tl_content_grid', 'colArray'),
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(4) NOT NULL default ''"
);

// VISIBILITY
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_visible'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_visible'],
    'inputType' => 'select',
    'options'   => array(
        'd-xs-block',
        'd-sm-block',
        'd-md-block',
        'd-lg-block',
        'd-xl-block'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['grid_visible'],
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
$GLOBALS['TL_DCA']['tl_content']['fields']['grid_hidden'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['grid_hidden'],
    'inputType' => 'select',
    'options'   => array(
        'd-xs-none',
        'd-sm-none',
        'd-md-none',
        'd-lg-none',
        'd-xl-none'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['grid_hidden'],
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

// PADDING
$GLOBALS['TL_DCA']['tl_content']['fields']['col_no_padding'] = array
(
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['col_no_padding'],
    'inputType' => 'select',
    'options' => array(
        'px-0' => &$GLOBALS['TL_LANG']['tl_content']['px-0'],
        'py-0' => &$GLOBALS['TL_LANG']['tl_content']['py-0'],
        'p-0'  => &$GLOBALS['TL_LANG']['tl_content']['p-0']
    ),
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'),
    'sql' => "varchar(4) NOT NULL default ''"
);

// OFFSET
$GLOBALS['TL_DCA']['tl_content']['fields']['offset_xs'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['offset_xs'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['offset'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_content']['fields']['offset_sm'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['offset_sm'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['offset'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['offset_md'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['offset_md'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['offset'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['offset_lg'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['offset_lg'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['offset'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['offset_xl'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['offset_xl'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['offset'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);

// ORDER
$GLOBALS['TL_DCA']['tl_content']['fields']['order_xs'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['order_xs'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['order'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['order_sm'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['order_sm'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['order'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['order_md'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['order_md'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['order'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['order_lg'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['order_lg'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['order'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50 clr'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['order_xl'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['order_xl'],
    'inputType' => 'select',
    'options'   => range(1, 12),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['order'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(2) NOT NULL default ''"
);

// ALIGNMENT
$GLOBALS['TL_DCA']['tl_content']['fields']['element_vertical_alignment'] = array(
    'label' => &$GLOBALS['TL_LANG']['tl_content']['element_vertical_alignment'],
    'exclude' => true,
    'search' => false,
    'inputType' => 'select',
    'options' => array(
        'align-self-start',
        'align-self-center',
        'align-self-end'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['element_vertical_alignment_options'],
    'eval' => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 255,
        'tl_class' => 'w50 clr'
    ),
    'sql' => "varchar(32) NOT NULL default ''"
);
$GLOBALS['TL_DCA']['tl_content']['fields']['element_vertical_alignment_width'] = array (
    'label'     => &$GLOBALS['TL_LANG']['tl_content']['element_vertical_alignment_width'],
    'inputType' => 'select',
    'options'   => array(
        'sm',
        'md',
        'lg',
        'xl'
    ),
    'reference' => &$GLOBALS['TL_LANG']['tl_content']['element_vertical_alignment_width_options'],
    'eval'      => array(
        'includeBlankOption' => true,
        'mandatory' => false,
        'maxlength' => 500,
        'tl_class' => 'w50'
    ),
    'sql'       => "varchar(500) NOT NULL default ''"
);


class tl_content_grid extends tl_content
{
    /**
     * Onload callback for tl_content
     *
     * Add language field to all content palettes
     *
     * @param DataContainer $dc
     */
    public function appendGridComponents(DataContainer $dc = null)
    {
        $dc->loadDataContainer('tl_page');
        $dc->loadDataContainer('tl_content');

        // add grid to all palettes
        foreach ($GLOBALS['TL_DCA']['tl_content']['palettes'] as $key => $value) {
            // if element is '__selector__' OR 'default' OR the palette has already a language key
            if ($key == '__selector__' || $key == 'default' || strpos($value, ',grid(?=\{|,|;|$)') !== false) {
                continue;
            }

            $GLOBALS['TL_DCA']['tl_content']['palettes'][$key] = $value . ';{grid_legend:hide},grid_xs,grid_sm,grid_md,grid_lg,grid_xl;{grid_visible_legend:hide},grid_hidden,grid_visible;{col_no_padding_legend:hide},col_no_padding;{grid_offset_legend:hide},offset_xs,offset_sm,offset_md,offset_lg,offset_xl;{grid_order_legend:hide},order_xs,order_sm,order_md,order_lg,order_xl;{element_position_label},element_vertical_alignment,element_vertical_alignment_width';
        }
    }

    /**
     * Option callback for columns
     *
     * return Array $range
     */
    public function colArray()
    {
        $range = range(1, 12);

        array_push($range, "auto");

        return $range;
    }
}
