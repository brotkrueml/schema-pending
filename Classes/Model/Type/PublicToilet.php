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
 * A public toilet is a room or small building containing one or more toilets (and possibly also urinals) which is available for use by the general public, or by customers or employees of certain businesses.
 */
#[Type('PublicToilet')]
final class PublicToilet extends AbstractType
{
    protected static array $propertyNames = [
        'additionalProperty',
        'additionalType',
        'address',
        'aggregateRating',
        'alternateName',
        'amenityFeature',
        'branchCode',
        'containedInPlace',
        'containsPlace',
        'description',
        'disambiguatingDescription',
        'event',
        'faxNumber',
        'geo',
        'geoContains',
        'geoCoveredBy',
        'geoCovers',
        'geoCrosses',
        'geoDisjoint',
        'geoEquals',
        'geoIntersects',
        'geoOverlaps',
        'geoTouches',
        'geoWithin',
        'globalLocationNumber',
        'hasDriveThroughService',
        'hasMap',
        'identifier',
        'image',
        'isAccessibleForFree',
        'isicV4',
        'keywords',
        'latitude',
        'logo',
        'longitude',
        'mainEntityOfPage',
        'maximumAttendeeCapacity',
        'name',
        'openingHours',
        'openingHoursSpecification',
        'photo',
        'potentialAction',
        'publicAccess',
        'review',
        'sameAs',
        'slogan',
        'smokingAllowed',
        'specialOpeningHoursSpecification',
        'subjectOf',
        'telephone',
        'tourBookingPage',
        'url',
    ];
}
