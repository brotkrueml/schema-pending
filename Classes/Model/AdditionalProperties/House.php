<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\AdditionalProperties;

use Brotkrueml\Schema\Core\AdditionalPropertiesInterface;

final class House implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'House';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'accommodationCategory',
            'accommodationFloorPlan',
            'floorLevel',
            'hasDriveThroughService',
            'hasGS1DigitalLink',
            'leaseLength',
            'numberOfBathroomsTotal',
            'numberOfBedrooms',
            'numberOfFullBathrooms',
            'numberOfPartialBathrooms',
            'tourBookingPage',
            'yearBuilt',
        ];
    }
}
