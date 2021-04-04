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
 * For a given health insurance plan, the specification for costs and coverage of prescription drugs.
 */
final class HealthPlanFormulary extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'healthPlanCostSharing',
        'healthPlanDrugTier',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'offersPrescriptionByMail',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
