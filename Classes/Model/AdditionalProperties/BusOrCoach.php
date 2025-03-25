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

final class BusOrCoach implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'BusOrCoach';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'asin',
            'callSign',
            'colorSwatch',
            'countryOfAssembly',
            'countryOfLastProcessing',
            'depth',
            'funding',
            'gtin',
            'hasAdultConsideration',
            'hasEnergyConsumptionDetails',
            'hasGS1DigitalLink',
            'hasMeasurement',
            'hasMerchantReturnPolicy',
            'height',
            'inProductGroupWithID',
            'mobileUrl',
            'negativeNotes',
            'nsn',
            'pattern',
            'positiveNotes',
            'size',
            'weight',
            'width',
        ];
    }
}
