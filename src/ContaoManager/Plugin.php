<?php

declare(strict_types=1);

/*
 * This file is part of Contao ThemeManager AdvancedForm Plugin.
 *
 * (c) https://www.oveleon.de/
 */

namespace ContaoThemeManager\AdvancedForm\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use ContaoThemeManager\AdvancedForm\ContaoThemeManagerAdvancedForm;
use ContaoThemeManager\Core\ContaoThemeManagerCore;
use Oveleon\ContaoAdvancedFormBundle\ContaoAdvancedFormBundle;
use Oveleon\ContaoComponentStyleManager\ContaoComponentStyleManager;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser): array
    {
        return [
            BundleConfig::create(ContaoThemeManagerAdvancedForm::class)
                ->setLoadAfter([ContaoCoreBundle::class, ContaoThemeManagerCore::class, ContaoAdvancedFormBundle::class, ContaoComponentStyleManager::class])
                ->setReplace(['ctm-advanced-form']),
        ];
    }
}
