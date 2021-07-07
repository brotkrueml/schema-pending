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
 * Any biological, chemical, or biochemical thing. For example: a protein; a gene; a chemical; a synthetic chemical.
 */
final class BioChemEntity extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedDisease',
        'bioChemInteraction',
        'bioChemSimilarity',
        'biologicalRole',
        'description',
        'disambiguatingDescription',
        'hasBioChemEntityPart',
        'hasMolecularFunction',
        'hasRepresentation',
        'identifier',
        'image',
        'isEncodedByBioChemEntity',
        'isInvolvedInBiologicalProcess',
        'isLocatedInSubcellularLocation',
        'isPartOfBioChemEntity',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'taxonomicRange',
        'url',
    ];
}
