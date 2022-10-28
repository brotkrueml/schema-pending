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
 * A SpecialAnnouncement combines a simple date-stamped textual information update
 * media type information, e.g. "application/rss+xml" or "application/atom+xml".
 */
final class SpecialAnnouncement extends AbstractType
{
    protected static $propertyNames = [
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
        'additionalType',
        'aggregateRating',
        'alternateName',
        'alternativeHeadline',
        'announcementLocation',
        'archivedAt',
        'assesses',
        'associatedMedia',
        'audience',
        'audio',
        'author',
        'award',
        'category',
        'character',
        'citation',
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
        'countryOfOrigin',
        'creativeWorkStatus',
        'creator',
        'creditText',
        'dateCreated',
        'dateModified',
        'datePosted',
        'datePublished',
        'description',
        'disambiguatingDescription',
        'discussionUrl',
        'diseasePreventionInfo',
        'diseaseSpreadStatistics',
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
        'gettingTestedInfo',
        'governmentBenefitsInfo',
        'hasPart',
        'headline',
        'identifier',
        'image',
        'inLanguage',
        'interactionStatistic',
        'interactivityType',
        'interpretedAsClaim',
        'isAccessibleForFree',
        'isBasedOn',
        'isFamilyFriendly',
        'isPartOf',
        'keywords',
        'learningResourceType',
        'license',
        'locationCreated',
        'mainEntity',
        'mainEntityOfPage',
        'maintainer',
        'material',
        'materialExtent',
        'mentions',
        'name',
        'newsUpdatesAndGuidelines',
        'offers',
        'pattern',
        'position',
        'potentialAction',
        'producer',
        'provider',
        'publicTransportClosuresInfo',
        'publication',
        'publisher',
        'publishingPrinciples',
        'quarantineGuidelines',
        'recordedAt',
        'releasedEvent',
        'review',
        'sameAs',
        'schemaVersion',
        'schoolClosuresInfo',
        'sdDatePublished',
        'sdLicense',
        'sdPublisher',
        'size',
        'sourceOrganization',
        'spatial',
        'spatialCoverage',
        'sponsor',
        'subjectOf',
        'teaches',
        'temporal',
        'temporalCoverage',
        'text',
        'thumbnailUrl',
        'timeRequired',
        'translator',
        'travelBans',
        'typicalAgeRange',
        'url',
        'usageInfo',
        'version',
        'video',
        'webFeed',
        'workExample',
    ];
}
