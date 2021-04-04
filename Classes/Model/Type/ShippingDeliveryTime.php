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
 * ShippingDeliveryTime provides various pieces of information about delivery times for shipping.
 */
final class ShippingDeliveryTime extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'businessDays',
        'cutoffTime',
        'description',
        'disambiguatingDescription',
        'handlingTime',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'subjectOf',
        'transitTime',
        'url',
    ];
}
