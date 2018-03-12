<?php

/**
 * 361GRAD-Element - Grid
 *
 * @package   dse-elements-bundle
 * @author    Markus Häfner <markus@361.de>
 * @copyright 2018 361GRAD
 * @license   http://www.361.de proprietary
 */

namespace Dse\ElementsBundle\DseGridExtension\Element;

use Contao\BackendTemplate;
use Contao\ContentElement;
use Contao\File;
use Contao\FilesModel;
use Contao\FrontendTemplate;
use Contao\StringUtil;
use Patchwork\Utf8;

/**
 * Class ContentDseGrid
 *
 * @package Dse\ElementsBundle\Elements
 */
class ContentDseGrid extends ContentElement
{
    /**
     * Template name.
     *
     * @var string
     */
    protected $strTemplate = 'ce_dse_grid';


    /**
     * Display a wildcard in the back end.
     *
     * @return string
     */
    public function generate()
    {
        if (TL_MODE == 'BE') {
            $objTemplate = new BackendTemplate('be_wildcard');

            $objTemplate->wildcard =
                '### ' . Utf8::strtoupper($GLOBALS['TL_LANG']['CTE']['dse_grid'][1]) . ' ###';
            $objTemplate->title    = $this->headline;

            return $objTemplate->parse();
        }

        return parent::generate();
    }


    /**
     * Generate the module
     *
     * @return void
     */
    protected function compile()
    {
        // Build subheadline like Contao headline
        $arrSubheadline              = StringUtil::deserialize($this->dse_subheadline);
        $this->Template->subheadline = is_array($arrSubheadline) ? $arrSubheadline['value'] : $arrSubheadline;
        $this->Template->shl         = is_array($arrSubheadline) ? $arrSubheadline['unit'] : 'h2';
    }
}
