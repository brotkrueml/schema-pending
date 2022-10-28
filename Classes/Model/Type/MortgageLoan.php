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
 * A loan in which property or real estate is used as collateral. (A loan securitized against some real estate.)
 */
final class MortgageLoan extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'aggregateRating',
        'alternateName',
        'amount',
        'annualPercentageRate',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broker',
        'category',
        'currency',
        'description',
        'disambiguatingDescription',
        'domiciledMortgage',
        'feesAndCommissionsSpecification',
        'gracePeriod',
        'hasOfferCatalog',
        'hoursAvailable',
        'identifier',
        'image',
        'interestRate',
        'isRelatedTo',
        'isSimilarTo',
        'loanMortgageMandateAmount',
        'loanRepaymentForm',
        'loanTerm',
        'loanType',
        'logo',
        'mainEntityOfPage',
        'name',
        'offers',
        'potentialAction',
        'provider',
        'providerMobility',
        'recourseLoan',
        'renegotiableLoan',
        'requiredCollateral',
        'review',
        'sameAs',
        'serviceOutput',
        'serviceType',
        'slogan',
        'subjectOf',
        'termsOfService',
        'url',
    ];
}
