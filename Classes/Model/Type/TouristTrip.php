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
 * A tourist trip. A created itinerary of visits to one or more places of interest (TouristAttraction/TouristDestination) often linked by a similar theme, geographic area, or interest to a particular touristType. The [UNWTO](http://www2.unwto.org/) defines tourism trip as the Trip taken by visitors.
 * (See examples below.)
 */
#[Type('TouristTrip')]
final class TouristTrip extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'arrivalTime',
        'departureTime',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'itinerary',
        'mainEntityOfPage',
        'name',
        'offers',
        'partOfTrip',
        'potentialAction',
        'provider',
        'sameAs',
        'subTrip',
        'subjectOf',
        'touristType',
        'tripOrigin',
        'url',
    ];
}
