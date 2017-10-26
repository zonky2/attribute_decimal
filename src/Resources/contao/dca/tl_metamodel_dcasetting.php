<?php

/**
 * This file is part of MetaModels/attribute_decimal.
 *
 * (c) 2012-2017 The MetaModels team.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * This project is provided in good faith and hope to be usable by anyone.
 *
 * @package    MetaModels
 * @subpackage AttributeDecimal
 * @author     Christian Schiffler <c.schiffler@cyberspectrum.de>
 * @author     Andreas Isaak <andy.jared@googlemail.com>
 * @author     Carolina M. Koehn <office@kikmedia.de>
 * @author     Cliff Parnitzky <github@cliff-parnitzky.de>
 * @author     Stefan Heimes <stefan_heimes@hotmail.com>
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2012-2017 The MetaModels team.
 * @license    https://github.com/MetaModels/attribute_decimal/blob/master/LICENSE LGPL-3.0
 * @filesource
 */

$GLOBALS['TL_DCA']['tl_metamodel_dcasetting']['metasubselectpalettes']['attr_id']['decimal'] = array
(
    'presentation' => array
    (
        'tl_class',
    ),
    'functions'  => array
    (
        'mandatory',
    ),
    'overview' => array
    (
        'filterable',
        'searchable',
    )
);
