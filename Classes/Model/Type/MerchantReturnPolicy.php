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
 * A MerchantReturnPolicy provides information about product return policies associated with an Organization or Product.
 */
final class MerchantReturnPolicy extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'inStoreReturnsOffered',
        'mainEntityOfPage',
        'merchantReturnDays',
        'merchantReturnLink',
        'name',
        'potentialAction',
        'refundType',
        'returnFees',
        'returnPolicyCategory',
        'sameAs',
        'subjectOf',
        'url',
    ];
}
