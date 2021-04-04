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
 * A structured value representing repayment.
 */
final class RepaymentSpecification extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'downPayment',
        'earlyPrepaymentPenalty',
        'identifier',
        'image',
        'loanPaymentAmount',
        'loanPaymentFrequency',
        'mainEntityOfPage',
        'name',
        'numberOfLoanPayments',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
