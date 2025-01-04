<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * Size related properties of a product, typically a size code (name) and optionally a sizeSystem, sizeGroup, and product measurements (hasMeasurement). In addition, the intended audience can be defined through suggestedAge, suggestedGender, and suggested body measurements (suggestedMeasurement).
 * @deprecated This type represents an enumeration, use the specific SizeSpecification enum instead.
 */
#[Type('SizeSpecification')]
final class SizeSpecification extends AbstractType
{
    protected static array $propertyNames = [
        'additionalProperty',
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'equal',
        'greater',
        'greaterOrEqual',
        'hasMeasurement',
        'identifier',
        'image',
        'lesser',
        'lesserOrEqual',
        'mainEntityOfPage',
        'name',
        'nonEqual',
        'potentialAction',
        'sameAs',
        'sizeGroup',
        'sizeSystem',
        'subjectOf',
        'suggestedAge',
        'suggestedGender',
        'suggestedMeasurement',
        'url',
        'valueReference',
    ];
}
