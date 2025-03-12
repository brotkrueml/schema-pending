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

final class Patient implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'Patient';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'agentInteractionStatistic',
            'callSign',
            'funding',
            'gender',
            'hasCredential',
            'jobTitle',
            'knowsAbout',
            'knowsLanguage',
            'suggestedAge',
            'suggestedMeasurement',
        ];
    }
}
