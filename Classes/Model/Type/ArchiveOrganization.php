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
 * An organization with archival holdings. An organization which keeps and preserves archival material and typically makes it accessible to the public.
 */
#[Type('ArchiveOrganization')]
final class ArchiveOrganization extends AbstractType
{
    protected static array $propertyNames = [
        'actionableFeedbackPolicy',
        'additionalProperty',
        'additionalType',
        'address',
        'agentInteractionStatistic',
        'aggregateRating',
        'alternateName',
        'alumni',
        'amenityFeature',
        'archiveHeld',
        'areaServed',
        'award',
        'branchCode',
        'brand',
        'contactPoint',
        'containedInPlace',
        'containsPlace',
        'correctionsPolicy',
        'currenciesAccepted',
        'department',
        'description',
        'disambiguatingDescription',
        'dissolutionDate',
        'diversityPolicy',
        'diversityStaffingReport',
        'duns',
        'email',
        'employee',
        'ethicsPolicy',
        'event',
        'faxNumber',
        'founder',
        'foundingDate',
        'foundingLocation',
        'funder',
        'funding',
        'geo',
        'geoContains',
        'geoCoveredBy',
        'geoCovers',
        'geoCrosses',
        'geoDisjoint',
        'geoEquals',
        'geoIntersects',
        'geoOverlaps',
        'geoTouches',
        'geoWithin',
        'globalLocationNumber',
        'hasCredential',
        'hasDriveThroughService',
        'hasMap',
        'hasMerchantReturnPolicy',
        'hasOfferCatalog',
        'hasPOS',
        'identifier',
        'image',
        'interactionStatistic',
        'isAccessibleForFree',
        'isicV4',
        'iso6523Code',
        'keywords',
        'knowsAbout',
        'knowsLanguage',
        'latitude',
        'legalName',
        'leiCode',
        'location',
        'logo',
        'longitude',
        'mainEntityOfPage',
        'makesOffer',
        'maximumAttendeeCapacity',
        'member',
        'memberOf',
        'naics',
        'name',
        'nonprofitStatus',
        'numberOfEmployees',
        'openingHours',
        'openingHoursSpecification',
        'ownershipFundingInfo',
        'owns',
        'parentOrganization',
        'paymentAccepted',
        'photo',
        'potentialAction',
        'priceRange',
        'publicAccess',
        'publishingPrinciples',
        'review',
        'sameAs',
        'seeks',
        'slogan',
        'smokingAllowed',
        'specialOpeningHoursSpecification',
        'sponsor',
        'subOrganization',
        'subjectOf',
        'taxID',
        'telephone',
        'tourBookingPage',
        'unnamedSourcesPolicy',
        'url',
        'vatID',
    ];
}
