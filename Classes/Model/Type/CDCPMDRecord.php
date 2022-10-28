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
 * A CDCPMDRecord is a data structure representing a record in a CDC tabular data format
 * definitions used as the source here.
 */
final class CDCPMDRecord extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'cvdCollectionDate',
        'cvdFacilityCounty',
        'cvdFacilityId',
        'cvdNumBeds',
        'cvdNumBedsOcc',
        'cvdNumC19Died',
        'cvdNumC19HOPats',
        'cvdNumC19HospPats',
        'cvdNumC19MechVentPats',
        'cvdNumC19OFMechVentPats',
        'cvdNumC19OverflowPats',
        'cvdNumICUBeds',
        'cvdNumICUBedsOcc',
        'cvdNumTotBeds',
        'cvdNumVent',
        'cvdNumVentUse',
        'datePosted',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
