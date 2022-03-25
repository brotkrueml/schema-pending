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
 * A tourist destination. In principle any Place can be a TouristDestination from a City, Region or Country to an AmusementPark or Hotel. This Type can be used on its own to describe a general TouristDestination, or be used as an additionalType to add tourist relevant properties to any other Place.  A TouristDestination is defined as a Place that contains, or is colocated with, one or more TouristAttractions, often linked by a similar theme or interest to a particular touristType. The [UNWTO](http://www2.unwto.org/) defines Destination (main destination of a tourism trip) as the place visited that is central to the decision to take the trip.
 * (See examples below).
 */
final class TouristDestination extends AbstractType
{
    protected static $propertyNames = [
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
        'includesAttraction',
        'isAccessibleForFree',
        'isicV4',
        'keywords',
        'latitude',
        'logo',
        'longitude',
        'mainEntityOfPage',
        'maximumAttendeeCapacity',
        'name',
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
        'touristType',
        'url',
    ];
}
