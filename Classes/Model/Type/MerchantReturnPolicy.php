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
 * A MerchantReturnPolicy provides information about product return policies associated with an Organization, Product, or Offer.
 */
#[Type('MerchantReturnPolicy')]
final class MerchantReturnPolicy extends AbstractType
{
    protected static array $propertyNames = [
        'additionalProperty',
        'additionalType',
        'alternateName',
        'applicableCountry',
        'customerRemorseReturnFees',
        'customerRemorseReturnLabelSource',
        'customerRemorseReturnShippingFeesAmount',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'inStoreReturnsOffered',
        'itemCondition',
        'itemDefectReturnFees',
        'itemDefectReturnLabelSource',
        'itemDefectReturnShippingFeesAmount',
        'mainEntityOfPage',
        'merchantReturnDays',
        'merchantReturnLink',
        'name',
        'potentialAction',
        'refundType',
        'restockingFee',
        'returnFees',
        'returnLabelSource',
        'returnMethod',
        'returnPolicyCategory',
        'returnPolicyCountry',
        'returnPolicySeasonalOverride',
        'returnShippingFeesAmount',
        'sameAs',
        'subjectOf',
        'url',
        'validForMemberTier',
    ];
}
