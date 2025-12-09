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
 * Event type: Conference event.
 */
#[Type('ConferenceEvent')]
final class ConferenceEvent extends AbstractType
{
    protected static array $propertyNames = [
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
        'hasParticipationOffer',
        'hasSponsorshipOffer',
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
        'owner',
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
