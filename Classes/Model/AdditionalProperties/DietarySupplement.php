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

final class DietarySupplement implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'DietarySupplement';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'asin',
            'colorSwatch',
            'countryOfAssembly',
            'countryOfLastProcessing',
            'funding',
            'gtin',
            'hasAdultConsideration',
            'hasEnergyConsumptionDetails',
            'hasGS1DigitalLink',
            'hasMeasurement',
            'hasMerchantReturnPolicy',
            'inProductGroupWithID',
            'mobileUrl',
            'negativeNotes',
            'nsn',
            'pattern',
            'positiveNotes',
            'size',
        ];
    }
}
