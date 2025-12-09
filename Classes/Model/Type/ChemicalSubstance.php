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
 * A chemical substance is 'a portion of matter of constant composition, composed of molecular entities of the same type or of different types' (source: [ChEBI:59999](https://www.ebi.ac.uk/chebi/searchId.do?chebiId=59999)).
 */
#[Type('ChemicalSubstance')]
final class ChemicalSubstance extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedDisease',
        'bioChemInteraction',
        'bioChemSimilarity',
        'biologicalRole',
        'chemicalComposition',
        'chemicalRole',
        'description',
        'disambiguatingDescription',
        'funding',
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
        'owner',
        'potentialAction',
        'potentialUse',
        'sameAs',
        'subjectOf',
        'taxonomicRange',
        'url',
    ];
}
