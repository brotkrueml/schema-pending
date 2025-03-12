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

final class JobPosting implements AdditionalPropertiesInterface
{
    public function getType(): string
    {
        return 'JobPosting';
    }

    public function getAdditionalProperties(): array
    {
        return [
            'applicantLocationRequirements',
            'applicationContact',
            'directApply',
            'educationRequirements',
            'eligibilityToWorkRequirement',
            'employerOverview',
            'employmentUnit',
            'experienceInPlaceOfEducation',
            'jobImmediateStart',
            'jobLocationType',
            'jobStartDate',
            'occupationalCategory',
            'physicalRequirement',
            'qualifications',
            'securityClearanceRequirement',
            'sensoryRequirement',
            'totalJobOpenings',
        ];
    }
}
