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
 * A discrete unit of inheritance which affects one or more biological traits (Source: [https://en.wikipedia.org/wiki/Gene](https://en.wikipedia.org/wiki/Gene)). Examples include FOXP2 (Forkhead box protein P2), SCARNA21 (small Cajal body-specific RNA 21), A- (agouti genotype).
 */
final class Gene extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'alternativeOf',
        'associatedDisease',
        'bioChemInteraction',
        'bioChemSimilarity',
        'biologicalRole',
        'description',
        'disambiguatingDescription',
        'encodesBioChemEntity',
        'expressedIn',
        'funding',
        'hasBioChemEntityPart',
        'hasBioPolymerSequence',
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
