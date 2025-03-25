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
 * ShippingConditions represent a set of constraints and information about the conditions of shipping a product. Such conditions may apply to only a subset of the products being shipped, depending on aspects of the product like weight, size, price, destination, and others. All the specified conditions must be met for this ShippingConditions to apply.
 */
#[Type('ShippingConditions')]
final class ShippingConditions extends AbstractType
{
    protected static array $propertyNames = [
        'additionalType',
        'alternateName',
        'depth',
        'description',
        'disambiguatingDescription',
        'doesNotShip',
        'height',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'numItems',
        'orderValue',
        'potentialAction',
        'sameAs',
        'seasonalOverride',
        'shippingDestination',
        'shippingOrigin',
        'shippingRate',
        'subjectOf',
        'transitTime',
        'url',
        'weight',
        'width',
    ];
}
