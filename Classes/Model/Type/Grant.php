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
 * A grant, typically financial or otherwise quantifiable, of resources. Typically a funder sponsors some MonetaryAmount to an Organization or Person,
 * The amount of a Grant is represented using amount as a MonetaryAmount.
 */
final class Grant extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'fundedItem',
        'funder',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'sponsor',
        'subjectOf',
        'url',
    ];
}
