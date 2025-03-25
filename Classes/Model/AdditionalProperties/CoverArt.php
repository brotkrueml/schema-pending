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

final class CoverArt implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'CoverArt';
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
            'depth',
            'digitalSourceType',
            'editEIDR',
            'educationalLevel',
            'funding',
            'height',
            'interpretedAsClaim',
            'maintainer',
            'materialExtent',
            'pattern',
            'provider',
            'sdDatePublished',
            'sdLicense',
            'sdPublisher',
            'size',
            'teaches',
            'usageInfo',
            'weight',
            'width',
        ];
    }
}
