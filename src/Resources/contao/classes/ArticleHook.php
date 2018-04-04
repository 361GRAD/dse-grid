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

use Contao\FilesModel;

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

            // article width
            if($tpl->article_width) {
                $tpl->article_width = ' '.$tpl->article_width;
            }

            // article background image
            $tpl->article_style = "";
            $imagePath = FilesModel::findByUuid($tpl->article_image_bg)->path;
            if(!empty($tpl->article_image_bg) && !empty($imagePath)) {
                $tpl->article_style .= "background-image: url('".$imagePath."');";
            }
            if($tpl->article_image_bg_position) {
                $tpl->article_style .= "background-position: ".str_replace("_", " ", $tpl->article_image_bg_position).";";
            }
            if($tpl->article_image_bg_repeat) {
                $tpl->article_style .= "background-repeat: $tpl->article_image_bg_repeat;";
            }
            if($tpl->article_image_bg_size) {
                $tpl->article_style .= "background-size: $tpl->article_image_bg_size;";
            }

            // article vertical padding
            if($tpl->article_padding_top_bottom) {
                $tpl->article_padding_top_bottom = ' '.$tpl->article_padding_top_bottom;
                if($tpl->article_padding_top_bottom_width) {
                    $tpl->article_padding_top_bottom = substr_replace($tpl->article_padding_top_bottom, "-".$tpl->article_padding_top_bottom_width, strrpos($tpl->article_padding_top_bottom, "-"), 0);
                }
            }

            // article horizontal padding
            if($tpl->article_padding_right_left) {
                $tpl->article_padding_right_left = ' '.$tpl->article_padding_right_left;
                if($tpl->article_padding_right_left_width) {
                    $tpl->article_padding_right_left = substr_replace($tpl->article_padding_right_left, "-".$tpl->article_padding_right_left_width, strrpos($tpl->article_padding_right_left, "-"), 0);
                }
            }

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
