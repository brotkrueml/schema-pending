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
 * A set of products (either ProductGroups or specific variants) that are listed together e.g. in an Offer.
 */
#[Type('ProductCollection')]
final class ProductCollection extends AbstractType
{
    protected static array $propertyNames = [
        'about',
        'abstract',
        'accessMode',
        'accessModeSufficient',
        'accessibilityAPI',
        'accessibilityControl',
        'accessibilityFeature',
        'accessibilityHazard',
        'accessibilitySummary',
        'accountablePerson',
        'acquireLicensePage',
        'additionalProperty',
        'additionalType',
        'aggregateRating',
        'alternateName',
        'alternativeHeadline',
        'archivedAt',
        'asin',
        'assesses',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'brand',
        'category',
        'character',
        'citation',
        'collectionSize',
        'color',
        'colorSwatch',
        'comment',
        'commentCount',
        'conditionsOfAccess',
        'contentLocation',
        'contentRating',
        'contentReferenceTime',
        'contributor',
        'copyrightHolder',
        'copyrightNotice',
        'copyrightYear',
        'correction',
        'countryOfAssembly',
        'countryOfLastProcessing',
        'countryOfOrigin',
        'creativeWorkStatus',
        'creator',
        'creditText',
        'dateCreated',
        'dateModified',
        'datePublished',
        'depth',
        'description',
        'digitalSourceType',
        'disambiguatingDescription',
        'discussionUrl',
        'editEIDR',
        'editor',
        'educationalAlignment',
        'educationalLevel',
        'educationalUse',
        'encoding',
        'encodingFormat',
        'exampleOfWork',
        'expires',
        'funder',
        'funding',
        'genre',
        'gtin',
        'gtin12',
        'gtin13',
        'gtin14',
        'gtin8',
        'hasAdultConsideration',
        'hasCertification',
        'hasEnergyConsumptionDetails',
        'hasGS1DigitalLink',
        'hasMeasurement',
        'hasMerchantReturnPolicy',
        'hasPart',
        'headline',
        'height',
        'identifier',
        'image',
        'inLanguage',
        'inProductGroupWithID',
        'includesObject',
        'interactionStatistic',
        'interactivityType',
        'interpretedAsClaim',
        'isAccessibleForFree',
        'isAccessoryOrSparePartFor',
        'isBasedOn',
        'isConsumableFor',
        'isFamilyFriendly',
        'isPartOf',
        'isRelatedTo',
        'isSimilarTo',
        'isVariantOf',
        'itemCondition',
        'keywords',
        'learningResourceType',
        'license',
        'locationCreated',
        'logo',
        'mainEntity',
        'mainEntityOfPage',
        'maintainer',
        'manufacturer',
        'material',
        'materialExtent',
        'mentions',
        'mobileUrl',
        'model',
        'mpn',
        'name',
        'negativeNotes',
        'nsn',
        'offers',
        'pattern',
        'position',
        'positiveNotes',
        'potentialAction',
        'producer',
        'productID',
        'productionDate',
        'provider',
        'publication',
        'publisher',
        'publishingPrinciples',
        'purchaseDate',
        'recordedAt',
        'releaseDate',
        'releasedEvent',
        'review',
        'sameAs',
        'schemaVersion',
        'sdDatePublished',
        'sdLicense',
        'sdPublisher',
        'size',
        'sku',
        'slogan',
        'sourceOrganization',
        'spatial',
        'spatialCoverage',
        'sponsor',
        'subjectOf',
        'teaches',
        'temporal',
        'temporalCoverage',
        'text',
        'thumbnail',
        'thumbnailUrl',
        'timeRequired',
        'translator',
        'typicalAgeRange',
        'url',
        'usageInfo',
        'version',
        'video',
        'weight',
        'width',
        'wordCount',
        'workExample',
    ];
}
