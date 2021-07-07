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
 * A set of organisms asserted to represent a natural cohesive biological unit.
 */
final class Taxon extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'childTaxon',
        'description',
        'disambiguatingDescription',
        'hasDefinedTerm',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'parentTaxon',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'taxonRank',
        'url',
    ];
}
