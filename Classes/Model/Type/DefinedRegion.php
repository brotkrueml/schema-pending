<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A DefinedRegion is a geographic area defined by potentially arbitrary (rather than political, administrative or natural geographical) criteria. Properties are provided for defining a region by reference to sets of postal codes.
 *
 * Region = state, canton, prefecture, autonomous community...
 */
final class DefinedRegion extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'addressCountry',
        'addressRegion',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'postalCode',
        'postalCodePrefix',
        'postalCodeRange',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
