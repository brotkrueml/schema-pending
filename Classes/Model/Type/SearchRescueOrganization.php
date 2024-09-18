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
 * A Search and Rescue organization of some kind.
 */
#[Type('SearchRescueOrganization')]
final class SearchRescueOrganization extends AbstractType
{
    protected static array $propertyNames = [
        'acceptedPaymentMethod',
        'actionableFeedbackPolicy',
        'additionalType',
        'address',
        'agentInteractionStatistic',
        'aggregateRating',
        'alternateName',
        'alumni',
        'areaServed',
        'award',
        'brand',
        'contactPoint',
        'correctionsPolicy',
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
        'globalLocationNumber',
        'hasCertification',
        'hasCredential',
        'hasGS1DigitalLink',
        'hasMemberProgram',
        'hasMerchantReturnPolicy',
        'hasOfferCatalog',
        'hasPOS',
        'identifier',
        'image',
        'interactionStatistic',
        'isicV4',
        'iso6523Code',
        'keywords',
        'knowsAbout',
        'knowsLanguage',
        'legalName',
        'leiCode',
        'location',
        'logo',
        'mainEntityOfPage',
        'makesOffer',
        'member',
        'memberOf',
        'naics',
        'name',
        'nonprofitStatus',
        'numberOfEmployees',
        'ownershipFundingInfo',
        'owns',
        'parentOrganization',
        'potentialAction',
        'publishingPrinciples',
        'review',
        'sameAs',
        'seeks',
        'slogan',
        'sponsor',
        'subOrganization',
        'subjectOf',
        'taxID',
        'telephone',
        'unnamedSourcesPolicy',
        'url',
        'vatID',
    ];
}
