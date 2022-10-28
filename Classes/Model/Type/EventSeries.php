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
 * A series of Events. Included events can relate with the series using the superEvent property.
 *
 * it may also sometimes prove useful to describe a longer-term series as an Event.
 */
final class EventSeries extends AbstractType
{
    protected static $propertyNames = [
        'about',
        'actor',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'attendee',
        'audience',
        'composer',
        'contributor',
        'description',
        'director',
        'disambiguatingDescription',
        'doorTime',
        'duration',
        'endDate',
        'eventAttendanceMode',
        'eventSchedule',
        'eventStatus',
        'funder',
        'funding',
        'identifier',
        'image',
        'inLanguage',
        'isAccessibleForFree',
        'keywords',
        'location',
        'mainEntityOfPage',
        'maximumAttendeeCapacity',
        'maximumPhysicalAttendeeCapacity',
        'maximumVirtualAttendeeCapacity',
        'name',
        'offers',
        'organizer',
        'performer',
        'potentialAction',
        'previousStartDate',
        'recordedIn',
        'remainingAttendeeCapacity',
        'review',
        'sameAs',
        'sponsor',
        'startDate',
        'subEvent',
        'subjectOf',
        'superEvent',
        'translator',
        'typicalAgeRange',
        'url',
        'workFeatured',
        'workPerformed',
    ];
}
