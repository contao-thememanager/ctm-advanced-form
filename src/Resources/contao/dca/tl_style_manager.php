<?php
/*
 * This file is part of Contao ThemeManager AdvancedForm Plugin.
 *
 * (c) https://www.oveleon.de/
 */

// Extend the default palette
Contao\CoreBundle\DataContainer\PaletteManipulator::create()
    ->addField(array('extendAdvancedForm', 'extendAdvancedFormPage'), 'extendForm', Contao\CoreBundle\DataContainer\PaletteManipulator::POSITION_AFTER)
    ->applyToPalette('default', 'tl_style_manager');

// Extend fields
$GLOBALS['TL_DCA']['tl_style_manager']['fields']['extendAdvancedForm'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_style_manager']['extendAdvancedForm'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);

$GLOBALS['TL_DCA']['tl_style_manager']['fields']['extendAdvancedFormPage'] = array
(
    'label'                   => &$GLOBALS['TL_LANG']['tl_style_manager']['extendAdvancedFormPage'],
    'exclude'                 => true,
    'filter'                  => true,
    'inputType'               => 'checkbox',
    'eval'                    => array('tl_class'=>'clr'),
    'sql'                     => "char(1) NOT NULL default ''"
);
