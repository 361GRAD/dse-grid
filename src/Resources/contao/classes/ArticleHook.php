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

class ArticleHook extends \System {

	public function insertCustomTemplate($tpl, $data, $article)
	{
		global $objPage;
		$layoutID = $objPage->layout;
		$objLayout = \LayoutModel::findByID($layoutID);

		if($objLayout->activateCArticles){
			$template = new \FrontendTemplate('mod_dse_grid');
			$count = count($tpl->elements);

			$containertype = 'container';

			// article_hidden
            $article_hidden = '';
            foreach(unserialize($tpl->article_hidden) as $value) {
                $article_hidden .= ' '.$value;
            }
            $tpl->article_hidden = $article_hidden;

            // article_visible
            $article_visible = '';
            foreach(unserialize($tpl->article_visible) as $value) {
                $article_visible .= ' '.$value;
            }
            $tpl->article_visible = $article_visible;

            // no-gutters
            if($tpl->article_elements_no_gutters != '') {
                $tpl->article_elements_no_gutters = ' '.$tpl->article_elements_no_gutters;
            }

            // vertical alignment
            if($tpl->article_elements_vertical_alignment) {
                $tpl->article_elements_vertical_alignment = ' '.$tpl->article_elements_vertical_alignment;
                if($tpl->article_elements_vertical_alignment_width) {
                    $tpl->article_elements_vertical_alignment = substr_replace($tpl->article_elements_vertical_alignment, "-".$tpl->article_elements_vertical_alignment_width, strrpos($tpl->article_elements_vertical_alignment, "-"), 0);
                }
            }

            // horizontal alignment
            if($tpl->article_elements_horizontal_alignment) {
                $tpl->article_elements_horizontal_alignment = ' '.$tpl->article_elements_horizontal_alignment;
                if($tpl->article_elements_horizontal_alignment_width) {
                    $tpl->article_elements_horizontal_alignment = substr_replace($tpl->article_elements_horizontal_alignment, "-".$tpl->article_elements_horizontal_alignment_width, strrpos($tpl->article_elements_horizontal_alignment, "-"), 0);
                }
            }

			$template->setData($tpl->getData());
			$article->Template = $template;
		}
	}
}
