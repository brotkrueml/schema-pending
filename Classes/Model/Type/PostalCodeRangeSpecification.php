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
 * Indicates a range of postalcodes, usually defined as the set of valid codes between postalCodeBegin and postalCodeEnd, inclusively.
 */
final class PostalCodeRangeSpecification extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'postalCodeBegin',
        'postalCodeEnd',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
