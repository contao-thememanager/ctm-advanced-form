<?php
/*
 * This file is part of Contao ThemeManager AdvancedForm Plugin.
 *
 * (c) https://www.oveleon.de/
 */

// Extend the regular palette
$palette = Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addLegend('style_manager_legend', 'expert_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_BEFORE)
    ->addField(array('styleManager'), 'style_manager_legend', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_APPEND)
    ->applyToPalette('default', 'tl_advanced_form_page');

// Extend fields
$GLOBALS['TL_DCA']['tl_advanced_form_page']['fields']['styleManager'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_advanced_form_page']['styleManager'],
    'exclude'                 => true,
    'inputType'               => 'stylemanager',
    'eval'                    => array('tl_class'=>'clr stylemanager'),
    'sql'                     => "blob NULL"
);

$GLOBALS['TL_DCA']['tl_advanced_form_page']['fields']['attributes']['load_callback'][] = array('\\Oveleon\\ContaoComponentStyleManager\\StyleManager', 'onLoad');
$GLOBALS['TL_DCA']['tl_advanced_form_page']['fields']['attributes']['save_callback'][] = array('\\Oveleon\\ContaoComponentStyleManager\\StyleManager', 'onSave');
