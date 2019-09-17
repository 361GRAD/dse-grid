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

use Contao\Input;
use Contao\PageModel;
use Contao\LayoutModel;
use Contao\Database;
use Contao\Controller;

class BeContentHook
{
	/**
	 * [insertCustomGrid description]
	 * @param  Database_Result $objElement
	 * @param  [string]          $strBuffer
	 * @return [string]
	 */
	public function insertCustomGrid($objElement, $strBuffer)
	{
		$objArticle = 	Database::getInstance()->prepare("SELECT pid FROM tl_article WHERE id=?")
						->limit(1)
						->execute(Input::get('id'));

		$objPage = PageModel::findWithDetails($objArticle->pid);
		$objLayout = LayoutModel::findByID($objPage->layout);

		if($objLayout->activateCArticles) {
			$strClass = Controller::findContentElement($objElement->type);
			$newObjElement = new $strClass($objElement);
	
			$classes = 'col';
	
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
	
			$arrCss = \Contao\StringUtil::deserialize($objElement->cssID);
	
			if($arrCss[1]) {
				$arrCss[1] = $arrCss[1].' '.$classes;
			} else {
				$arrCss[1] = $arrCss[1].$classes;
			}
			$newObjElement->cssID = $arrCss;
	
			$strBuffer = $newObjElement->generate();
		}

		return $strBuffer;
	}
}
