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

final class Barcode implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Barcode';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'abstract',
            'acquireLicensePage',
            'archivedAt',
            'assesses',
            'conditionsOfAccess',
            'contentReferenceTime',
            'copyrightNotice',
            'correction',
            'creativeWorkStatus',
            'creditText',
            'digitalSourceType',
            'editEIDR',
            'educationalLevel',
            'embeddedTextCaption',
            'funding',
            'ineligibleRegion',
            'interpretedAsClaim',
            'maintainer',
            'materialExtent',
            'pattern',
            'provider',
            'sdDatePublished',
            'sdLicense',
            'sdPublisher',
            'sha256',
            'size',
            'teaches',
            'usageInfo',
        ];
    }
}
