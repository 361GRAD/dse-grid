<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (C) 2005-2013 Leo Feyer
 *
 * @package   dse-grid
 * @author    Markus Häfner  <markus@361.eu>
 * @link      https://361.de
 * @license   GNU
 * @copyright 361 Grad Digital GmbH
 */

namespace Dse\ElementsBundle\DseGridExtension\Resources\contao\classes;

class ContentHook extends \Frontend {
	/**
	 * [insertCustomGrid description]
	 * @param  Database_Result $objElement
	 * @param  [string]          $strBuffer
	 * @return [string]
	 */
	public function insertCustomGrid($objElement, $strBuffer)
	{
		global $objPage;
		$layoutID = $objPage->layout;
		$objLayout = \LayoutModel::findByID($layoutID);

		if($objLayout->activateCArticles){
			$strClass = $this->findContentElement($objElement->type);
			$newObjElement = new $strClass($objElement);

			$classes = ' col';

			// grid classes
            $arrClasses = [
                'grid_xs'	=> 'col-',
                'grid_sm'	=> 'col-sm-',
                'grid_md'	=> 'col-md-',
                'grid_lg'	=> 'col-lg-',
                'grid_xl'	=> 'col-xl-',
                'offset_xs'	=> 'offset-',
                'offset_sm'	=> 'offset-sm-',
                'offset_md'	=> 'offset-md-',
                'offset_lg'	=> 'offset-lg-',
                'offset_xl' => 'offset-xl-',
                'order_xs'	=> 'order-',
                'order_sm'	=> 'order-sm-',
                'order_md'	=> 'order-md-',
                'order_lg'	=> 'order-lg-',
                'order_xl'	=> 'order-xl-',
            ];

			foreach ($arrClasses as $key => $classPart) {
				if($objElement->$key != '' && $objElement->$key != -1){
					$classes .= ' '.$classPart.$objElement->$key;
				}
			}

			// grid visible
			if($objElement->grid_visible != ''){
				$grid_visible = @unserialize($objElement->grid_visible);
				if ($grid_visible === 'b:0;' || $grid_visible !== false) {
					foreach (\Contao\StringUtil::deserialize($objElement->grid_visible) as $key => $value) {
						$classes .= ' ' . $value;
					}
				} else {
					$classes .= ' ' . $objElement->grid_visible;
				}
			}
			
			// grid hidden
			if($objElement->grid_hidden != ''){
				$grid_hidden = @unserialize($objElement->grid_hidden);
				if ($grid_hidden === 'b:0;' || $grid_hidden !== false) {
					foreach (\Contao\StringUtil::deserialize($objElement->grid_hidden) as $key => $value) {
						$classes .= ' ' . $value;
					}
				} else {
					$classes .= ' ' . $objElement->grid_hidden;
				}
			}

            // no padding
            if($objElement->col_no_padding != ''){
                $classes .= ' '.$objElement->col_no_padding;
            }
            
            // vertical alignment
            if($objElement->element_vertical_alignment) {
                $objElement->element_vertical_alignment = ' '.$objElement->element_vertical_alignment;
                if($objElement->element_vertical_alignment_width) {
                    $objElement->element_vertical_alignment = substr_replace($objElement->element_vertical_alignment, "-".$objElement->element_vertical_alignment_width, strrpos($objElement->element_vertical_alignment, "-"), 0);
                }
                $classes .= $objElement->element_vertical_alignment;
            }

            // add classes to element object
			if($classes != ''){
				$arrCss = \Contao\StringUtil::deserialize($objElement->cssID);
				$arrCss[1] = $arrCss[1].$classes;
				$newObjElement->cssID = $arrCss;
			}
	    $strBuffer = $newObjElement->generate();
	  }

    return $strBuffer;
	}

    /**
     * loadDataContainer hook
     *
     * Add onload_callback definition when loadDataContainer hook is
     * called to define onload_callback as late as possible
     *
     * @param   String  $strBuffer
     */
    public function appendGridComponentsCallback($strName)
    {
//        echo "appendGridComponentsCallback\n";
//        echo $this->objContainer;
//        global $objPage;
//        $layoutID = $objPage->layout;
//        $objPage = \PageModel::findById(3);
//        var_dump($objPage);
//        $objLayout = \LayoutModel::findByID(1);
//        var_dump($objLayout);

        if ($strName == 'tl_content') {
//            $this::checkCArticles();
            $GLOBALS['TL_DCA']['tl_content']['config']['onload_callback'][] = array('tl_content_grid', 'appendGridComponents');
        }
    }

    private function checkCArticles() {
        if($objLayout->activateCArticles){
            return true;
        }
        return false;
    }
}
