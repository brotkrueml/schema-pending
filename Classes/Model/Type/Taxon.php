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
 * A set of organisms asserted to represent a natural cohesive biological unit.
 */
#[Type('Taxon')]
final class Taxon extends AbstractType
{
    protected static array $propertyNames = [
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
        'owner',
        'parentTaxon',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'taxonRank',
        'url',
    ];
}
