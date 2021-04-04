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
 * A DeliveryTimeSettings represents re-usable pieces of shipping information, relating to timing. It is designed for publication on an URL that may be referenced via the shippingSettingsLink property of a OfferShippingDetails. Several occurrences can be published, distinguished (and identified/referenced) by their different values for transitTimeLabel.
 */
final class DeliveryTimeSettings extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'alternateName',
        'deliveryTime',
        'description',
        'disambiguatingDescription',
        'identifier',
        'image',
        'isUnlabelledFallback',
        'mainEntityOfPage',
        'name',
        'potentialAction',
        'sameAs',
        'shippingDestination',
        'subjectOf',
        'transitTimeLabel',
        'url',
    ];
}
