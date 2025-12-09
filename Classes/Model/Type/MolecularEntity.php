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
 * Any constitutionally or isotopically distinct atom, molecule, ion, ion pair, radical, radical ion, complex, conformer etc., identifiable as a separately distinguishable entity.
 */
#[Type('MolecularEntity')]
final class MolecularEntity extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'associatedDisease',
        'bioChemInteraction',
        'bioChemSimilarity',
        'biologicalRole',
        'chemicalRole',
        'description',
        'disambiguatingDescription',
        'funding',
        'hasBioChemEntityPart',
        'hasMolecularFunction',
        'hasRepresentation',
        'identifier',
        'image',
        'inChI',
        'inChIKey',
        'isEncodedByBioChemEntity',
        'isInvolvedInBiologicalProcess',
        'isLocatedInSubcellularLocation',
        'isPartOfBioChemEntity',
        'iupacName',
        'mainEntityOfPage',
        'molecularFormula',
        'molecularWeight',
        'monoisotopicMolecularWeight',
        'name',
        'owner',
        'potentialAction',
        'potentialUse',
        'sameAs',
        'smiles',
        'subjectOf',
        'taxonomicRange',
        'url',
    ];
}
