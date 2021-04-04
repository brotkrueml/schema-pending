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
 * A delivery service through which radio content is provided via broadcast over the air or online.
 */
final class RadioBroadcastService extends AbstractType
{
    protected static $propertyNames = [
        'additionalType',
        'aggregateRating',
        'alternateName',
        'areaServed',
        'audience',
        'availableChannel',
        'award',
        'brand',
        'broadcastAffiliateOf',
        'broadcastDisplayName',
        'broadcastFrequency',
        'broadcastTimezone',
        'broadcaster',
        'broker',
        'callSign',
        'category',
        'description',
        'disambiguatingDescription',
        'hasBroadcastChannel',
        'hasOfferCatalog',
        'hoursAvailable',
        'identifier',
        'image',
        'inLanguage',
        'isRelatedTo',
        'isSimilarTo',
        'logo',
        'mainEntityOfPage',
        'name',
        'offers',
        'parentService',
        'potentialAction',
        'provider',
        'providerMobility',
        'review',
        'sameAs',
        'serviceOutput',
        'serviceType',
        'slogan',
        'subjectOf',
        'termsOfService',
        'url',
        'videoFormat',
    ];
}
