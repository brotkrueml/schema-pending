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

final class MusicGroup implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'MusicGroup';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'actionableFeedbackPolicy',
            'agentInteractionStatistic',
            'correctionsPolicy',
            'diversityPolicy',
            'diversityStaffingReport',
            'ethicsPolicy',
            'funding',
            'hasCredential',
            'hasGS1DigitalLink',
            'hasMerchantReturnPolicy',
            'iso6523Code',
            'knowsAbout',
            'knowsLanguage',
            'nonprofitStatus',
            'ownershipFundingInfo',
            'unnamedSourcesPolicy',
        ];
    }
}
