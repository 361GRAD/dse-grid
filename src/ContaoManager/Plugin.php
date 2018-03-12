<?php

namespace Dse\ElementsBundle\DseGridExtension\ContaoManager;

use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use Dse\ElementsBundle\DseGridExtension;
use Contao\CoreBundle\ContaoCoreBundle;

class Plugin implements BundlePluginInterface
{
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(DseGridExtension\DseGridBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class])
        ];
    }
}
