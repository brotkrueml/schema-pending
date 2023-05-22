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
 * Protein is here used in its widest possible definition, as classes of amino acid based molecules. Amyloid-beta Protein in human (UniProt P05067), eukaryota (e.g. an OrthoDB group) or even a single molecule that one can point to are all of type :Protein. A protein can thus be a subclass of another protein, e.g. :Protein as a UniProt record can have multiple isoforms inside it which would also be :Protein. They can be imagined, synthetic, hypothetical or naturally occurring.
 */
final class Protein extends AbstractType
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
