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
 * A trip on a commercial ferry line.
 */
#[Type('BoatTrip')]
final class BoatTrip extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'arrivalBoatTerminal',
        'arrivalTime',
        'departureBoatTerminal',
        'departureTime',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'itinerary',
        'mainEntityOfPage',
        'name',
        'offers',
        'owner',
        'partOfTrip',
        'potentialAction',
        'provider',
        'sameAs',
        'subTrip',
        'subjectOf',
        'tripOrigin',
        'url',
    ];
}
