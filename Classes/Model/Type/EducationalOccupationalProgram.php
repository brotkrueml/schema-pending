<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Attributes\Manual;
use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;
use Brotkrueml\Schema\Manual\Publisher;

/**
 * A program offered by an institution which determines the learning progress to achieve an outcome, usually a credential like a degree or certificate. This would define a discrete set of opportunities (e.g., job, courses) that together constitute a program with a clear start, end, set of requirements, and transition to a new occupational opportunity (e.g., a job), or sometimes a higher educational opportunity (e.g., an advanced degree).
 */
#[Type('EducationalOccupationalProgram')]
#[Manual(Publisher::Google, 'https://developers.google.com/search/docs/data-types/job-training')]
final class EducationalOccupationalProgram extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'applicationDeadline',
        'applicationStartDate',
        'dayOfWeek',
        'description',
        'disambiguatingDescription',
        'educationalCredentialAwarded',
        'educationalProgramMode',
        'endDate',
        'financialAidEligible',
        'hasCourse',
        'identifier',
        'image',
        'mainEntityOfPage',
        'maximumEnrollment',
        'name',
        'numberOfCredits',
        'occupationalCategory',
        'occupationalCredentialAwarded',
        'offers',
        'potentialAction',
        'programPrerequisites',
        'programType',
        'provider',
        'salaryUponCompletion',
        'sameAs',
        'startDate',
        'subjectOf',
        'termDuration',
        'termsPerYear',
        'timeOfDay',
        'timeToComplete',
        'trainingSalary',
        'typicalCreditsPerTerm',
        'url',
    ];
}
