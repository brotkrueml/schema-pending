<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A program with both an educational and employment component. Typically based at a workplace and structured around work-based learning, with the aim of instilling competencies related to an occupation. WorkBasedProgram is used to distinguish programs such as apprenticeships from school, college or other classroom based educational programs.
 */
final class WorkBasedProgram extends AbstractType
{
    protected static $propertyNames = [
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
