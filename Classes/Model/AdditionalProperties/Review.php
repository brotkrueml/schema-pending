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

final class Review implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Review';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'abstract',
            'acquireLicensePage',
            'archivedAt',
            'assesses',
            'associatedClaimReview',
            'associatedMediaReview',
            'associatedReview',
            'conditionsOfAccess',
            'contentReferenceTime',
            'copyrightNotice',
            'correction',
            'creativeWorkStatus',
            'creditText',
            'digitalSourceType',
            'displayLocation',
            'editEIDR',
            'educationalLevel',
            'funding',
            'interpretedAsClaim',
            'maintainer',
            'materialExtent',
            'negativeNotes',
            'pattern',
            'positiveNotes',
            'provider',
            'sdDatePublished',
            'sdLicense',
            'sdPublisher',
            'size',
            'teaches',
            'usageInfo',
        ];
    }
}
