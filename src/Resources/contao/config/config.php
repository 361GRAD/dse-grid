<?php

/**
 * 361GRAD-Element - Grid
 *
 * @package   dse-elements-bundle
 * @author    Markus Häfner <markus@361.de>
 * @copyright 2018 361GRAD
 * @license   http://www.361.de proprietary
 */

/**
 * Hooks
 */
if (TL_MODE == 'BE') {
    $GLOBALS['TL_HOOKS']['loadDataContainer'][]	= array('Dse\\ElementsBundle\\DseGridExtension\\Resources\\contao\\classes\\ContentHook', 'appendGridComponentsCallback');
}

if(TL_MODE == 'FE'){
    $GLOBALS['TL_HOOKS']['compileArticle'][]		= array('Dse\\ElementsBundle\\DseGridExtension\\Resources\\contao\\classes\\ArticleHook', 'insertCustomTemplate');
    $GLOBALS['TL_HOOKS']['getContentElement'][]	    = array('Dse\\ElementsBundle\\DseGridExtension\\Resources\\contao\\classes\\ContentHook', 'insertCustomGrid');
}