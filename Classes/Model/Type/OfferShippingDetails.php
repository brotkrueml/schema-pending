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
 * OfferShippingDetails represents information about shipping destinations.
 *
 * or Fast and expensive: $15 in 1-2 days.
 */
final class OfferShippingDetails extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'deliveryTime',
        'depth',
        'description',
        'disambiguatingDescription',
        'doesNotShip',
        'height',
        'identifier',
        'image',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'shippingDestination',
        'shippingLabel',
        'shippingOrigin',
        'shippingRate',
        'shippingSettingsLink',
        'subjectOf',
        'transitTimeLabel',
        'url',
        'weight',
        'width',
    ];
}
