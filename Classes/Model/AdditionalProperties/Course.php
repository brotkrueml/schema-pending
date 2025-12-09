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

final class Course implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Course';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'abstract',
            'acquireLicensePage',
            'archivedAt',
            'assesses',
            'competencyRequired',
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
            'financialAidEligible',
            'funding',
            'interpretedAsClaim',
            'maintainer',
            'materialExtent',
            'numberOfCredits',
            'occupationalCredentialAwarded',
            'pattern',
            'provider',
            'sdDatePublished',
            'sdLicense',
            'sdPublisher',
            'size',
            'syllabusSections',
            'teaches',
            'totalHistoricalEnrollment',
            'usageInfo',
        ];
    }
}
