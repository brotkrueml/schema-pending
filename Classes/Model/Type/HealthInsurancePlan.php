<?php

declare(strict_types=1);

/*
 * This file is part of the "schema_pending" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

namespace Brotkrueml\SchemaPending\Model\Type;

use Brotkrueml\Schema\Attributes\Type;
use Brotkrueml\Schema\Core\Model\AbstractType;

/**
 * A US-style health insurance plan, including PPOs, EPOs, and HMOs.
 */
#[Type('HealthInsurancePlan')]
final class HealthInsurancePlan extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'benefitsSummaryUrl',
        'contactPoint',
        'description',
        'disambiguatingDescription',
        'healthPlanDrugOption',
        'healthPlanDrugTier',
        'healthPlanId',
        'healthPlanMarketingUrl',
        'identifier',
        'image',
        'includesHealthPlanFormulary',
        'includesHealthPlanNetwork',
        'mainEntityOfPage',
        'name',
        'owner',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
        'usesHealthPlanIdStandard',
    ];
}
