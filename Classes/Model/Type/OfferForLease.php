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
 * An OfferForLease in Schema.org represents an Offer to lease out something, i.e. an Offer whose
 * businessFunction is [lease out](http://purl.org/goodrelations/v1#LeaseOut.). See [Good Relations](https://en.wikipedia.org/wiki/GoodRelations) for
 * background on the underlying concepts.
 */
#[Type('OfferForLease')]
final class OfferForLease extends AbstractType
{
    protected static array $propertyNames = [
        'acceptedPaymentMethod',
        'addOn',
        'additionalProperty',
        'additionalType',
        'advanceBookingRequirement',
        'aggregateRating',
        'alternateName',
        'areaServed',
        'asin',
        'availability',
        'availabilityEnds',
        'availabilityStarts',
        'availableAtOrFrom',
        'availableDeliveryMethod',
        'businessFunction',
        'category',
        'checkoutPageURLTemplate',
        'deliveryLeadTime',
        'description',
        'disambiguatingDescription',
        'eligibleCustomerType',
        'eligibleDuration',
        'eligibleQuantity',
        'eligibleRegion',
        'eligibleTransactionVolume',
        'gtin',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'hasAdultConsideration',
        'hasMeasurement',
        'hasMerchantReturnPolicy',
        'identifier',
        'image',
        'includesObject',
        'ineligibleRegion',
        'inventoryLevel',
        'isFamilyFriendly',
        'itemCondition',
        'itemOffered',
        'leaseLength',
        'mainEntityOfPage',
        'mobileUrl',
        'mpn',
        'name',
        'offeredBy',
        'potentialAction',
        'price',
        'priceCurrency',
        'priceSpecification',
        'priceValidUntil',
        'review',
        'sameAs',
        'seller',
        'serialNumber',
        'shippingDetails',
        'sku',
        'subjectOf',
        'url',
        'validFrom',
        'validThrough',
        'warranty',
    ];
}
